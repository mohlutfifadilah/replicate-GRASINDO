<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    //

    public function login() {
        return view('login');
    }

    public function post_login(Request $request){

        // dd($request);
        if(Auth::check()){
            Alert::error('Error', 'Anda sudah login');
            return redirect()->route('app')->with('error', 'Anda sudah login!');
        }
        $credentials = $request->only('username', 'password');

        $user = User::all();
        if (Auth::attempt($credentials)) {
            if(Auth::user()->kode_pendaki === null){
                return redirect('dashboard');
            } else {
                if(Auth::user()->is_verified != 1){
                    Alert::error('Error', 'Akun belum terverifikasi oleh admin');
                    return redirect()->route('app')->with('error', 'Akun belum terverifikasi oleh admin');
                } else {
                    return redirect()->route('app')->with('sukses', 'Berhasil login!');
                }
            }
        }
        Alert::error('Error', 'Username atau Password salah!');
        return Redirect('/login')->with('credentials', 'Username atau Password salah!');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
