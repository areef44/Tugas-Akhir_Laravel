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
                'verification_password' => 'required|min:5',
                'photo' => 'image|max:1024'
            ],
            [
                'required' => ":attribute Tidak Boleh Kosong",
                'unique' => ":attribute telah digunakan"
            ]
        );


        $path = $this->photo->store('photos', 'public');

        // $url = asset('storage/' . $path);

        $hashedPassword = Hash::make($this->password);

        $polices = Police::create([
            'police_name' => $this->police_name,
            'id_sector' => $this->id_sector,
            'email' => $this->email,
            'password' => $hashedPassword,
            'photo' => $path
        ]);



        // if ($request->file("photo") != null) {
        //     //request file photo dari device
        //     $photo = $request->file("photo");

        //     //hash name foto 
        //     $filename = $photo->hashName();

        //     //move file to folder photo
        //     $photo->move("photo", $filename);

        //     //get url from file foto
        //     $payload['photo'] = $request->getSchemeAndHttpHost() . "/photo/" . $filename;
        // } else {
        //     $payload['photo'] = "";
        // }


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
