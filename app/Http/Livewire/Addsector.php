<?php

namespace App\Http\Livewire;

use App\Models\Sector;
use Livewire\Component;

class Addsector extends Component
{
    public $sector_name;
    public $address;
    public $district;

    public function render()
    {
        return view('livewire.addsector');
    }

    public function store()
    {
        $this->validate([
            'sector_name' => 'required|min:3',
            'address'     => 'required|min:5',
            'district' => 'required|min:5'
        ]);

        $sectors = Sector::create([
            'sector_name' => $this->sector_name,
            'address' => $this->address,
            'district' => $this->district
        ]);

        $this->resetInput();

        $this->emit('sectorsStored', $sectors);

        $this->reset();
        session()->flash('message-success', 'Polisi Sektor Berhasil Ditambahkan');
    }

    private function resetInput()
    {
        $this->sector_name = null;
        $this->address = null;
        $this->district = null;
    }
}
