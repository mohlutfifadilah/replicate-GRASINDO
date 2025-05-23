<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    //
    public function index() {
        $user = User::find(Auth::user()->id);
        $jenis = Identitas::find($user->id_identitas);
        $segment = request()->segment(1);
        if ($segment===null){
            $segment = 'profil';
        }
        return view('profil', compact('user', 'jenis', 'segment'));
    }
}
