<?php

namespace App\Http\Livewire;

use App\Models\Police;
use Livewire\Component;

class Policesidebar extends Component
{
    protected $listeners = [
        'imageUpdated' => 'handleStored',
    ];

    public function render()
    {
        $userId = session()->get('idPengguna');
        $polices = Police::query()
            ->where('role_id', 2)
            ->where('id', $userId)
            ->first();
        return view('livewire.policesidebar', [
            'polices' => $polices
        ]);
    }

    public function handleStored($update)
    {
    }
}
