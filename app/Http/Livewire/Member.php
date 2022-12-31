<?php

namespace App\Http\Livewire;

use App\Models\Member as ModelsMember;
use Livewire\Component;

class Member extends Component
{
    public function render()
    {
        $userId = session()->get('idPengguna');
        $members = ModelsMember::query()
            ->where('role_id', 1)
            ->where('id', $userId)
            ->first();
        return view('livewire.member', [
            'members' => $members
        ]);
    }
}
