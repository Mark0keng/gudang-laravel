<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Rehister'
        ]);
    }

    public function create(Request $request)
    {
        // return request::all();

        $validated = $request->validate([
            'name' => ['required', 'unique:users'],
            'email' => ['required', 'email:dns','unique:users'],
            'password' => ['required','min:3']
        ]);

        // dd('registrasi berhasil');
        
        // $validated['password'] = bcrypt($validated['password']);
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        $request->session()->flash('success', 'Registrasi Berhasil. Silahkan Login!');
        return redirect('/login');
    }
}
