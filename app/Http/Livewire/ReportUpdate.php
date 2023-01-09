<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Police;
use App\Models\Report;
use Illuminate\Http\Client\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class ReportUpdate extends Component
{

    use WithFileUploads;

    public $reports;
    public $item;
    public $id_category;
    public $id_police;
    public $identity;
    public $quantity;
    public $value;
    public $report_date;
    public $loss_date;
    public $lost_location;
    public $story;
    public $picture;

    protected $listeners = [
        'reportUpdated' => 'handleStored',
    ];

    public function handleStored($update)
    {
    }

    public function mount($id)
    {

        $this->reports = Report::query()->where('id', $id)->first();

        $this->item = $this->reports->item;

        $this->id_category = $this->reports->id_category;

        $this->id_police = $this->reports->id_police;

        $this->identity = $this->reports->identity;

        $this->quantity = $this->reports->quantity;

        $this->value = $this->reports->value;

        $this->report_date = $this->reports->report_date;

        $this->loss_date = $this->reports->loss_date;

        $this->lost_location = $this->reports->lost_location;

        $this->story = $this->reports->story;

        // $this->picture = $this->reports->picture;
    }

    public function render()
    {

        $categories = Category::query()->get();
        $polices = Police::query()->get();
        $reports = Report::query()->get();
        return view('livewire.report-update', [
            'categories' => $categories,
            'polices' => $polices,
            'reports' => $reports
        ]);
    }

    public function update($id)
    {
        $update = Report::query()->find($id);

        if ($this->picture !== null) {
            $image = $this->picture->store('pictures', 'public');
        } else {
            $image = $update->picture;
        }

        $update->update([

            'item' => $this->item,

            'id_category' => $this->id_category,

            'id_police' => $this->id_police,

            'identity' => $this->identity,

            'quantity' => $this->quantity,

            'value' => $this->value,

            'report_date' => $this->report_date,

            'loss_date' => $this->loss_date,

            'lost_location' => $this->lost_location,

            'story' => $this->story,

            'picture' => $image

        ]);

        $this->emit('reportUpdated', $update);

        session()->flash('message-success', 'Data Berhasil Dirubah');
    }
}
