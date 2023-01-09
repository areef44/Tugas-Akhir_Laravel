<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sector;

class SectorUpdate extends Component
{
    public $sector_name;

    public $address;

    public $district;

    public $sectorId;

    protected $listeners = [
        'getSector' => 'showSector'
    ];

    public function render()
    {
        return view('livewire.sector-update');
    }

    public function showSector($sectors)
    {
        $this->sector_name = $sectors['sector_name'];

        $this->address = $sectors['address'];

        $this->district = $sectors['district'];

        $this->sectorId = $sectors['id'];

    }

    public function update()
    {
        $this->validate([
            'sector_name' => 'required|min:3',
            'address'     => 'required|min:5',
            'district' => 'required|min:5'
        ]);

        if ($this->sectorId) {
            $sectors = Sector::find($this->sectorId);
            $sectors->update([
                'sector_name'=> $this->sector_name,
                'address' => $this->address,
                'district' => $this->district
            ]);

            $this->resetInput();

            $this->emit('sectorsUpdated', $sectors);
        }
    }

    private function resetInput()
    {
        $this->sector_name = null;
        $this->address = null;
        $this->district = null;
    }
}
