<?php

namespace App\Http\Livewire;

use App\Models\Sector as ModelsSector;
use Livewire\Component;

class Sector extends Component
{

    public $delete_id;

    protected $listeners = [
        'sectorsStored' => 'handleStored',
        'deleteConfirmed' => 'destroy'
    ];

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function render()
    {
        $data = ModelsSector::query()->get();
        return view('livewire.sector', ['sectors' => $data]);
    }

    public function handleStored($sectors)
    {
    }

    public function destroy()
    {
        $sectors = ModelsSector::where('id', $this->delete_id)->first();
        $sectors->delete();

        $this->dispatchBrowserEvent('categoriesDeleted');
    }
}
