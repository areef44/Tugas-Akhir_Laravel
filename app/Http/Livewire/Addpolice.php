<?php

namespace App\Http\Livewire;

use App\Models\Police;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;


class Addpolice extends Component
{
    use WithFileUploads;

    public $police_name;
    public $id_sector;
    public $email;
    public $password;
    public $photo;
    public $verification_password;

    public function render()
    {
        $data = Sector::query()->get();
        return view('livewire.addpolice', [
            'sectors' => $data
        ]);
    }

    public function store()
    {

        $this->validate(
            [
                'police_name' => 'required|min:3',
                'id_sector'   => 'required',
                'email'       => 'required|min:8|unique:polices',
                'password'    => 'min:8|required_with:verification_password|same:verification_password',
                'verification_password' => 'required|min:5'
            ],
            [
                'required' => ":attribute Tidak Boleh Kosong",
                'unique' => ":attribute telah digunakan"
            ]
        );

       

        
        $image = $this->photo->store('image', 'public');


         $polices = Police::query()->create([
            'police_name' => $this->police_name,
            'id_sector' => $this->id_sector,
            'email' => $this->email,
            'password' => $this->password,
            'photo' => $image
        ]);

        // dd($polices);


        $this->resetInput();

        $this->emit('policesStored', $polices);

        $this->reset();
        session()->flash('message-success', 'Polisi Sektor Berhasil Ditambahkan');
    }

    private function resetInput()
    {
        $this->police_name;
        $this->id_sector;
        $this->email;
        $this->password;
        $this->verification_password;
    }
}
