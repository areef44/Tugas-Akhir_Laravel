<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Livewire\Component;
use Dompdf\Dompdf;

class Cetakpdf extends Component
{
    public function render()
    {
        $reports = Report::query()
            ->first();

        $html = view('livewire.cetakpdf', ['reports' => $reports]);

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