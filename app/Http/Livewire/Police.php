<?php

namespace App\Http\Livewire;

use App\Models\Police as ModelsPolice;
use Livewire\Component;

class Police extends Component
{
    public function render()
    {
        $userId = session()->get('idPengguna');
        $polices = ModelsPolice::query()
            ->where('role_id', 2)
            ->where('id', $userId)
            ->first();
        return view('livewire.police', [
            'polices' => $polices
        ]);
    }
}
