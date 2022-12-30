<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Addcategory extends Component
{

    public $categories;
    public $description;


    public function render()
    {

        return view('livewire.addcategory');
    }

    public function store()
    {

        $this->validate([
            'categories' => 'required|min:3',
            'description' => 'required|min:5'
        ]);

        $categories = Category::create([
            'categories' => $this->categories,
            'description' => $this->description
        ]);

        $this->resetInput();

        $this->emit('categoriesStored', $categories);

        $this->reset();
        session()->flash('message-success', 'Kategori berhasil Ditambahkan');
    }

    private function resetInput()
    {
        $this->categories = null;
        $this->description = null;
    }
}
