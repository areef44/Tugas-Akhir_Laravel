<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Addmember extends Component
{
    public $nik;
    public $name;
    public function render()
    {
        return view('livewire.addmember');
    }
}
