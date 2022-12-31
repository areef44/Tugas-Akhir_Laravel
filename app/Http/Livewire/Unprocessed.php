<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Member;
use App\Models\Police;
use App\Models\Report;
use App\Models\Sector;
use Livewire\Component;

class Unprocessed extends Component
{
    public function render()
    {
        $userId = session()->get('idPengguna');
        $reports = Report::query()
            ->where('isValidated', 0)
            ->where('id_police', $userId)
            ->get();
        $members = Member::query()->get();
        $sectors = Sector::query()->get();
        $polices = Police::query()->get();
        $categories = Category::query()->get();
        return view('livewire.unprocessed', ([
            'reports' => $reports,
            'members' => $members,
            'sectors' => $sectors,
            'polices' => $polices,
            'categories' => $categories
        ]));
    }

    public function validated($id)
    {
        $reports = Report::find($id);
        $reports->isValidated = 1;
        $reports->save();
    }
}
