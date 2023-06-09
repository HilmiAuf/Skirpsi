<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registrasi');
    }

    public function store(Request $request)
    {

        // mengvalidasi data nya agar ga ngasal
        $validatedData = $request->validate([
            'name' => 'required|max:255', //wajib diisi | maksimal 255
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:64|confirmed',
            'password_confirmation' => 'required'

        ]);

        if ($validatedData['password'] == $validatedData['password_confirmation']) {
            //$validatedData['password'] = bcrypt($validatedData['password']); //di enkripsi dulu
            $validatedData['password'] = Hash::make($validatedData['password']); //bisa juga pake cara yang ini
            $validatedData['password_confirmation'] = $validatedData['password'];

            User::create($validatedData); //masukin ke database

            //$request->session()->flash('success', 'Registration successfull! please login'); //nampilin pesan sukses di halaman login

            return redirect('/login')->with('success', 'Registration successfull! please login'); //sama aja kyk yg di atas, ini lebih simpel
        } else {
            return back()->with('RegisterError', 'Register Failed');
        }

    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255', //wajib diisi | maksimal 255
            'email' => 'required',
        ]);
        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect('/profile');
    }


    public function getUser()
    {
        return view('Admin.useradmin', [
            'users' => User::all(),
        ]);
    }

    public function updateChange(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:5|max:255|confirmed',
        ]);
        //jika current password  sama dengan password user sekarang
        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('success', 'your password has been updated');
        }
        throw ValidationException::withMessages([
            'current_password' => 'your current password does not match with our record',
        ]);
    }


}
