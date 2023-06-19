<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Auth;

class LoginController extends Controller
{
    public function doLogin(Request $req){
        $credentials = $req->validate([
            "email"=> ["required"],
            "password"=>["required"],
        ]);
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            if($user->level == "admin"){
                $req->session()->regenerate();
                $user = User::all()->except(Auth::id());;
                return view('admin',compact('user'));

            }else if ($user->hak_akses_akun == "multimedia"){

            }else if ($user->hak_akses_akun == "pendeta"){

            }
        }else{
            Alert::error('Gagal Login', 'Kredensial yang anda masukkan salah');
            return redirect('toLogin');
        }
    }
}
