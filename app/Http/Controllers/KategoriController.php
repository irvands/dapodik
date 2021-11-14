<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Alert;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $kategori = Kategori::orderBy('updated_at','DESC')->paginate(5);
        return view('produk.kategori.index',['kategori'=>$kategori]);
    }

    public function addindex(){
        return view('produk.kategori.add');
    }
    
    public function add(Request $request){
        $request->validate([
            'kategori' => 'required|min:2'
        ],[
            'kategori.required' => 'Kolom Nama Kategori tidak boleh kosong',
            'kategori.min' => 'Kolom Nama Kategori minimal terdiri dari 2 karakter'
        ]);

        Kategori::create($request->all());
        Alert::success('Success','Data Berhasil Ditambah!');
        return redirect('/produk/kategori/');
    }

    public function destroy($id){
        $kategori = Kategori::find($id);
        $kategori->delete();

        Alert::success('Success','Data Berhasil Dihapus!');
        return redirect('/produk/kategori/');
    }

    public function update(Request $request){
        $request->validate([
            'kategori' => 'required|min:2'
        ],[
            'kategori.required' => 'Kolom Nama Kategori tidak boleh kosong',
            'kategori.min' => 'Kolom Nama Kategori minimal terdiri dari 2 karakter'
        ]);

        $kategori = Kategori::findorFail($request->id);
        $kategori->update($request->all()); 

        Alert::success('Success','Data Berhasil Diupdate!');
        return redirect('/produk/kategori/');
    }
}
