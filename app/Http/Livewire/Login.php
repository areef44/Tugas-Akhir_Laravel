<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;


    public function render()
    {
        return view('livewire.login');
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
            return view('livewire.member');
        }

        $pengguna = Member::query()
            ->where("email", $this->email)
            ->first();
        if ($pengguna == null) {
            session()->flash('message-success', 'Email Salah');
            return redirect()->route('login');
        }


        // dd(Hash::make($password), $pengguna, Hash::check($password, $pengguna->password));

        if (!Hash::check($this->password, $pengguna->password)) {
            session()->flash('message-success', 'Password Salah');
            return redirect()->route('login');
        }


        if (!session()->isStarted()) session()->start();
        session()->put("logged", true);
        session()->put("role_id", 1);
        session()->put("idPengguna", $pengguna->id);
        return redirect()->route("member");
    }

    function logout(Request $request)
    {
        session()->flush();
        return redirect()->route("login");
    }
}
