<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login'); //untuk menampilkan halaman login
    }

    public function authenticate(Request $request) //berfungsi untuk jika ingin login membutuhkan data dibawah ini
    {
        $credentials = $request->validate([
            //'email' => 'required|email:dns', //email:dns untuk membuat semakin ketat penjagaan emailnya
            'email' => 'required|email',
            'password' => 'required|max:64|min:8'
        ]);
        //kalo berhasil dia akan menjalankan if ini
        if (Auth::attempt($credentials)) { //jika berhasil akan masuk kehhalaman beranda 
            $request->session()->regenerate();
            return redirect("/");
        }
        return back()->with('loginError', 'Login Failed'); //jika gagal akan tetap pada halaman login
    }

    public function logout() //untuk logout 
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
