<?php

namespace App\Http\Livewire;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginAdmin extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login-admin');
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
            return view('livewire.admin');
        }

        $pengguna = Admin::query()
            ->where("email", $this->email)
            ->first();
        if ($pengguna == null) {
            session()->flash('message-success', 'Email Tidak Ditemukan');
            return redirect()->route('login-admin');
        }

        // dd(Hash::make($password), $pengguna, Hash::check($password, $pengguna->password));

        if (!Hash::check($this->password, $pengguna->password)) {
            session()->flash('message-success', 'Password Salah');
            return redirect()->route('login-admin');
        }

        if (!session()->isStarted()) session()->start();
        session()->put("logged", true);
        session()->put("role_id", 3);
        session()->put("idPengguna", $pengguna->id);
        return redirect()->route("admin");
    }

    function logout(Request $request)
    {
        session()->flush();
        return redirect()->route("login-admin");
    }
}
