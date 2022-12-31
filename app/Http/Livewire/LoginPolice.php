<?php

namespace App\Http\Livewire;

use App\Models\Police;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginPolice extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login-police');
    }

    function login(Request $request)
    {
        $this->validate(
            [
                'email'       => 'required',
                'password'    => 'required'
            ],
            [
                'required' => ":attribute Tidak Boleh Kosong",
            ]
        );

        if ($request->method() == "GET") {
            return view('livewire.police');
        }

        $pengguna = Police::query()
            ->where("email", $this->email)
            ->first();
        if ($pengguna == null) {
            $this->reset();
            session()->flash('message-success', 'Email Tidak Ditemukan');
        }

        // dd(Hash::make($password), $pengguna, Hash::check($password, $pengguna->password));

        if (!Hash::check($this->password, $pengguna->password)) {
            $this->reset();
            session()->flash('message-success', 'Password Salah');
        }

        if (!session()->isStarted()) session()->start();
        session()->put("logged", true);
        session()->put("idPengguna", $pengguna->id);
        return redirect()->route("police");
    }

    function logout(Request $request)
    {
        session()->flush();
        return redirect()->route("login-police");
    }
}
