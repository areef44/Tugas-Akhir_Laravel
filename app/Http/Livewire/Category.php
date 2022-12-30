<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{

    public $delete_id;

    protected $listeners = [
        'categoriesStored' => 'handleStored',
        'deleteConfirmed' => 'destroy'
    ];

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function render()
    {

        $data = ModelsCategory::query()->get();

        return view('livewire.category', ['categories' => $data]);
    }

    public function handleStored($categories)
    {
        // dd($categories);
    }

    public function destroy()
    {
        $categories = ModelsCategory::where('id', $this->delete_id)->first();
        $categories->delete();

        $this->dispatchBrowserEvent('categoriesDeleted');

        //     if ($id) {
        //         $categories = ModelsCategory::find($id);
        //         $categories->delete();
        //         session()->flash('message-success', 'Kategori berhasil dihapus');

    }
}
