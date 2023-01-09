<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
    public $statusUpdate = false;

    public $delete_id;

    protected $listeners = [
        'categoriesStored' => 'handleStored',
        'categoriesUpdated' => 'handleUpdated',
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

     public function handleUpdated($categories)
    {
        
    }

    public function getCategories($id)
    {
        $this->statusUpdate = true;

        $categories = ModelsCategory::find($id);

        $this->emit('getCategories', $categories);

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
