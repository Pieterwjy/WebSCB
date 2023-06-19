<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function doLogin(Request $req){
        $credentials = $req->validate([
            "username"=> ["required"],
            "password"=>["required"],
        ]);
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            print($user);
            if($user->hak_akses_akun == "admin"){
                $req->session()->regenerate();
                $user = Akun::all()->except(Auth::id());;
                return view('announcement');

            }else if ($user->hak_akses_akun == "multimedia"){

            }else if ($user->hak_akses_akun == "pendeta"){

            }
        }else{
            
            Alert::error('Gagal Login', 'Kredensial yang anda masukkan salah');
            return redirect('login');
        }
    }
    
}
