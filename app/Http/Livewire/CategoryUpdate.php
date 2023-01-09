<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Category;

class CategoryUpdate extends Component
{

    public $categories;

    public $description;

    public $categoriesId;

    protected $listeners = [
        'getCategories' => 'showCategories'
    ]; 

    public function render()
    {
        return view('livewire.category-update');
    }

    public function showCategories($categories)
    {
        $this->categories = $categories['categories'];
        $this->description = $categories['description'];
        $this->categoriesId = $categories['id'];

    }

    public function update()
    {
          $this->validate([
            'categories' => 'required|min:3',
            'description'     => 'required|min:5'
        ]);

        if ($this->categoriesId) {
            $categories = Category::find($this->categoriesId);

            $categories->update([
                'categories' => $this->categories,
                'description' => $this->description

            ]);

            $this->resetInput();

            $this->emit('categoriesUpdated', $categories );
        }
    }

    private function resetInput()
    {
        $this->categories = null;
        $this->description = null;
    }


}
