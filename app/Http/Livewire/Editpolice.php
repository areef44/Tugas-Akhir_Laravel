<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Police;
use App\Models\Sector;
use Livewire\WithFileUploads;

class Editpolice extends Component
{
    use WithFileUploads;

    public $photo;

    public function render()
    {
        $userId = session()->get('idPengguna');
        $polices = Police::query()
            ->where('role_id', 2)
            ->where('id', $userId)
            ->first();
        return view('livewire.editpolice', [
            'polices' => $polices
        ]);
    }

    public function update($id)
    {
        $update = Police::query()->find($id);

        if ($this->photo !== null) {
            $image = $this->photo->store('image', 'public');
        } else {
            $image = $update->photo;
        }

        $update->update([

            'photo' => $image

        ]);

        $this->resetInput();

        $this->emit('imageUpdated', $update);

        $this->reset();

        session()->flash('message-success', 'Foto berhasil Dirubah');
    }

    private function resetInput()
    {
        $this->photo = null;
    }
}
