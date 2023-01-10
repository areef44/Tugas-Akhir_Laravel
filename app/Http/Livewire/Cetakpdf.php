<?php

namespace App\Http\Livewire;

use App\Models\Member;
use App\Models\Report;
use App\Models\Sector;
use Livewire\Component;
use Dompdf\Dompdf;

class Cetakpdf extends Component
{
    public $reports;


    public function mount($id)
    {
        $this->reports = Report::query()->where('id', $id)
            ->where('isValidated', 1)
            ->first();
    }



    public function render()
    {

        $reports = $this->reports;

        $members = Member::query()->get();

        $sectors = Sector::query()->get();

        return view('livewire.cetakpdf', [
            'reports' => $reports,
            'members' => $members
        ]);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
