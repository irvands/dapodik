<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Alert;
use Hash;

class PengaturanController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      
        return view('pengaturan.index');
    }


    public function editpersonaluser(Request $request)
    {
        $user = User::find($request->id);

        $request->validate([
            'email' => "required|unique:users,email,$request->id",
            'name' => 'required',
            'password' => 'nullable|string|min:8|confirmed',
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah digunakan',
            'name.required' => 'Nama tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak sesuai',
        ]);
    
        if($request->password == null){
            $user->update(['email'=>$request->email,'name'=>$request->name]);
        }else{
            $user->update(['email'=>$request->email,'name'=>$request->name,'password' => Hash::make($request->password)]);
        }
        
        Alert::toast('Sukses! Data Berhasil Diupdate');
        return back();
    }
}
