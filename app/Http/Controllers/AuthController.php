<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $request)
    {
        if ($request->method() == "GET") {
            return view('login');
        }

        $email = $request->input("email");
        $password = $request->input("password");

        $members = Member::query()
            ->where("email", $email)
            ->first();
        // dd($users);
        if ($members == null) {
            return redirect()
                ->back()
                ->withErrors([
                    "msg" => "Email tidak ditemukan"
                ]);
        }
        // dd(Hash::make($password), $pengguna, Hash::check('fulan123', $pengguna->password));

        if (!Hash::check($password, $members->password)) {
            return redirect()
                ->back()
                ->withErrors([
                    "msg" => "password salah!"
                ]);
        }


        if (!session()->isStarted()) session()->start();
        session()->put("id_user", $members->id);
        session()->put("role_id", $members->role_id);

        if ($members->role_id == 1) {
            session()->put("logged-user", true);
            return redirect()->route("member");
        }
    }

    function logout(Request $request)
    {
        // if (session()->get('role_id') == 1) {
        //     session()->flush();
        //     return redirect()->route("login");
        // } else {
        //     session()->flush();
        //     return redirect()->route("login-police");
        // }
        session()->flush();
        return redirect()->route("login");
    }

    function logoutPolice(Request $request)
    {
        session()->flush();
        return redirect()->route("login-police");
    }
}
