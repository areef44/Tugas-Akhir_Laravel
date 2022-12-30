<?php

namespace App\Http\Livewire;

use App\Models\Police;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Officermanage extends Component
{

    public $delete_id;

    protected $listeners = [
        'policesStored' => 'handleStored',
        'deleteConfirmed' => 'destroy'
    ];

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function render()
    {
        // $data = Police::query()
        //     ->join('sectors', 'sectors.id', '=', 'polices.id_sector')
        //     ->get();
        $data = DB::select("SELECT polices.id as id_police, polices.*, sectors.* FROM polices, sectors WHERE sectors.id = polices.id_sector ");
        // dd($data);
        return view('livewire.officermanage', [
            'polices' => $data
        ]);
    }

    public function handleStored($categories)
    {
        // dd($categories);
    }

    public function destroy()
    {
        $polices = Police::where('id', $this->delete_id)->first();



        Storage::disk('public')->delete($polices->photo);

        $polices->delete();

        $this->dispatchBrowserEvent('categoriesDeleted');

        //     if ($id) {
        //         $categories = ModelsCategory::find($id);
        //         $categories->delete();
        //         session()->flash('message-success', 'Kategori berhasil dihapus');

    }
}
