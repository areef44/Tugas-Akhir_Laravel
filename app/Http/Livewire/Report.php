<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Police;
use App\Models\Report as ModelsReport;
use App\Models\Sector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Report extends Component
{

    public $delete_id;

    protected $listeners = [
        'reportsStored' => 'handleStored',
        'deleteConfirmed' => 'destroy'
    ];

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }


    public function render()
    {
        $categories = Category::query()->get();
        $polices = Police::query()->get();
        $reports = ModelsReport::query()->get();
        $sectors = Sector::query()->get();
        // $data = DB::select("SELECT polices.id as id_police, polices.*, sectors.* FROM polices, sectors WHERE sectors.id = polices.id_sector ");

        // $reports = DB::select("SELECT reports.*, polices.*, members.*, categories.*, sectors.* 
        // FROM polices,members,categories,reports ,sectors
        // WHERE members.id = reports.id_user");


        // $categories = Category::all();
        // dd($categories);

        // $data = ModelsReport::query()->get();

        // $results = DB::table('reports')
        //     ->join('polices', 'reports.id_police', '=', 'polices.id')
        //     ->get();

        // dd($polices);

        return view('livewire.report', [
            'reports' => $reports,
            'categories' => $categories,
            'polices' => $polices,
            'sector' => $sectors
        ]);
    }

    public function destroy()
    {
        $reports = ModelsReport::where('id', $this->delete_id)->first();

        if ($reports->picture != null) {

            Storage::disk('public')->delete($reports->picture);
        }

        $reports->delete();

        $this->dispatchBrowserEvent('categoriesDeleted');

        //     if ($id) {
        //         $categories = ModelsCategory::find($id);
        //         $categories->delete();
        //         session()->flash('message-success', 'Kategori berhasil dihapus');

    }
}
