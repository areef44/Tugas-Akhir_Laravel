<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Police;
use App\Models\Report;
use App\Models\Sector;
use Livewire\Component;
use Livewire\WithFileUploads;

class Addreport extends Component
{
    use WithFileUploads;

    public $item;
    public $id_category;
    public $identity;
    public $quantity;
    public $value;
    public $report_date;
    public $loss_date;
    public $lost_location;
    public $story;
    public $picture;
    public $id_police;


    public function render()
    {
        $categories = Category::query()->get();

        $polices = Police::query()->get();

        $sectors = Sector::query()->get();

        return view('livewire.addreport', [
            'categories' => $categories,
            'polices' => $polices,
            'sectors' => $sectors
        ]);
    }

    public function store()
    {
        $this->validate(
            [
                'item' => 'required|min:3',
                'id_category'   => 'required',
                'id_police' => 'required',
                'report_date' => 'required',
                'loss_date' => 'required',
                'lost_location'    => 'required',
                'picture' => 'max:1024'
            ],
            [
                'required' => ":attribute tidak boleh kosong",
                'unique' => ":attribute telah digunakan",
                'min' => ":attribute yang anda masukan belum valid"
            ]
        );



        if ($this->picture != null) {
            $path = $this->picture->store('pictures', 'public');
            $url = asset('storage/' . $path);
        } else {
            $path = null;
        }





        // $path = $this->photo->store('photos', 'public');




        $reports = Report::create([
            'item' => $this->item,
            'id_category' => $this->id_category,
            'identity' => $this->identity,
            'quantity' => $this->quantity,
            'value' => $this->value,
            'report_date' => $this->report_date,
            'loss_date' => $this->loss_date,
            'lost_location' => $this->lost_location,
            'story' => $this->story,
            'id_police' => $this->id_police,
            'picture' => $path
        ]);

        $this->resetInput();

        $this->emit('reportsStored', $reports);

        $this->reset();
        session()->flash('message-success', 'Laporan Anda Berhasil Ditambahkan');
    }

    private function resetInput()
    {

        $this->item;
        $this->id_category;
        $this->identity;
        $this->quantity;
        $this->value;
        $this->report_date;
        $this->loss_date;
        $this->lost_location;
        $this->story;
        $this->picture;
        $this->id_police;
    }
}
