<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Member;
use App\Models\Police;
use App\Models\Report;
use App\Models\Sector;
use Livewire\Component;

class Processed extends Component
{
    public function render()
    {
        $userId = session()->get('idPengguna');
        $reports = Report::query()
            ->where('isValidated', 1)
            ->where('id_police', $userId)
            ->get();
        $members = Member::query()->get();
        $sectors = Sector::query()->get();
        $polices = Police::query()->get();
        $categories = Category::query()->get();
        return view('livewire.processed', ([
            'reports' => $reports,
            'members' => $members,
            'sectors' => $sectors,
            'polices' => $polices,
            'categories' => $categories
        ]));
    }
}
