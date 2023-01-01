<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $nik;
    public $name;
    public $gender;
    public $birth_date;
    public $address;
    public $phone;
    public $email;
    public $password;
    public $verification_password;

    public function render()
    {
        return view('livewire.register');
    }

    public function store()
    {
        $this->validate(
            [
                'nik' => 'required|min:16|unique:members',
                'name'   => 'required|min:3|max:50',
                'gender'       => 'required',
                'birth_date' => 'required',
                'address' => 'required|min:10',
                'phone' => 'required|min:12',
                'email' => 'required|min:5|unique:members',
                'password'    => 'min:8|required_with:verification_password|same:verification_password',
                'verification_password' => 'required|min:8',
            ],
            [
                'required' => ":attribute tidak boleh kosong",
                'unique' => ":attribute telah digunakan",
                'min' => ":attribute yang anda masukan belum valid"
            ]
        );

        // $hashedPassword = Hash::make($this->password);

        $members = Member::create([
            'nik' => $this->nik,
            'name' => $this->name,
            'gender' => $this->gender,
            'birth_date' => $this->birth_date,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => $this->password
        ]);

        $this->resetInput();

        $this->emit('membersStored', $members);

        $this->reset();

        session()->flash('message-success', 'Anda Berhasil Melakukan Registrasi, Silakan Login Untuk Mengisi Form Kehilangan');
    }

    private function resetInput()
    {
        $this->nik;
        $this->name;
        $this->gender;
        $this->birth_date;
        $this->address;
        $this->phone;
        $this->birth_date;
        $this->email;
        $this->verification_password;
    }
}
