<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satuan;
use Alert;
use Illuminate\Support\Facades\Validator;

class SatuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $satuan = Satuan::orderBy('updated_at','DESC')->paginate(5);
        return view('produk.satuan.index',['satuan'=>$satuan]);
    }

    public function addindex(){
        return view('produk.satuan.add');
    }

    public function add(Request $request){
        $request->validate([
            'satuan' => 'required|min:2'
        ],[
            'satuan.required' => 'Kolom Nama Satuan tidak boleh kosong',
            'satuan.min' => 'Kolom Nama Satuan minimal terdiri dari 2 karakter'
        ]);

        Satuan::create($request->all());
        Alert::success('Success','Data Berhasil Ditambah!');
        return redirect('/produk/satuan/');
    }

    public function destroy($id){

        $satuan = Satuan::find($id);
        $satuan->delete();

        Alert::success('Success','Data Berhasil Dihapus!');
        return redirect('produk/satuan');
    }

    public function update(Request $request){
        
        $request->validate([
            'satuan'=>'required|min:2'
        ],[
            'satuan.required' => 'Kolom Nama Satuan tidak boleh kosong',
            'satuan.min' => 'Kolom Nama Satuan minimal terdiri dari 2 karakter'
        ]);

        $satuan = Satuan::findorFail($request->id);
        $satuan->update($request->all());

        Alert::success('Success','Data berhasil diupdate!');
        return redirect('produk/satuan');
    }
}
