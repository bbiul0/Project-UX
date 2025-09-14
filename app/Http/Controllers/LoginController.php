<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function authenticate(Request $r) {
        $credentials = $r->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email Wajib Diisi!',
            'email.email' => 'Email Tidak Valid!, Mohon Isi Email yang Valid!',
            'password.required' => 'Password Wajib Diisi!'
        ]);

        if (Auth::attempt($credentials)) {
            $r->session()->regenerate();
            return redirect()->intended('/index');
        }

        
        return back()->withInput()->with('error', "Your Email or Password is Wrong!");
    }

    public function signup(Request $r) {
        $credentials = $r->validate([
            'fullname' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required'
        ],
        [
            'fullname.required' => 'Nama Lengkap Wajib Diisi!',
            'email.required' => 'Email Wajib Diisi!',
            'email.email' => 'Email Tidak Valid!, Mohon Isi Email yang Valid!',
            'password.required' => 'Password Wajib Diisi!'
        ]);

        $user = 
        User::create([
            'full_name' => $r->fullname,
            'email' => $r->email,
            'password' => Hash::make($r->password),
        ]);

        if (!$user) {
            return back()->withInput()->with('error', 'SignUp Failed!');
        }

        return redirect()->route('loginCustomer.loginPage')->with('success', 'SignUp Success!');
        #success blom berhasil
    }

    public function logout(Request $r) {
        Auth::logout();

        $r->session()->invalidate();
        $r->session()->regenerateToken();

        return redirect('/loginCustomer');
    }
}
