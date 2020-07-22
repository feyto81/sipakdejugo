<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Berita;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{

   public function login()
    {
        return view('login.login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            toastr()->success('Selamat Datang Di Sipakdejugo','Success');
            return redirect('/home');
            
        }
        toastr()->error('Maaf Cek Kembali Username Dan Password', 'Gagal');
        return redirect('mastercontrol/admin');
    }
    public function logout()
    {
        Auth::logout();
        toastr()->success('Anda Berhasil Logout', 'Berhasil');
        return redirect('mastercontrol/admin');
    }
    public function index()
    {

        return view('home');
    }
    
    
}
