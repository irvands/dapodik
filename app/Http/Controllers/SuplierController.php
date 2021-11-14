<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;
use Alert;
use Illuminate\Support\Facades\Validator;

class SuplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
       $suplier = Suplier::orderBy('updated_at','DESC')->paginate(5);
       return view('suplier.index',['suplier'=>$suplier]);
   }

   public function addindex(){
        return view('suplier.add');
    }

    public function add(Request $request){
        $request->validate([
                'nama' => 'required',
                'no_hp' => 'required|string|min:10|max:13|regex:/^[0-9]*$/',
                'alamat' => 'required'
            ],[
                'nama.required' => 'Kolom Nama Suplier tidak boleh kosong',
                'no_hp.required' => 'Kolom Nomor HP tidak boleh kosong',
                'no_hp.regex' => 'Kolom Nomor HP harus berupa angka',
                'no_hp.min' => 'Kolom Nomor HP minimal terdiri dari 10 digit',
                'no_hp.max' => 'Kolom Nomor HP maksimal terdiri dari 13 digit',
                'alamat.required' => 'Kolom Alamat tidak boleh kosong'
            ]);

            Suplier::create($request->all());
            Alert::success('Success','Data Berhasil Ditambah !');
            return redirect('/suplier');
    }
    
    public function destroy($id){
        $suplier = Suplier::find($id);
        $suplier->delete();
        Alert::success('Success','Data Berhasil Dihapus! !');
        return redirect('/suplier');
    }

    public function update(Request $request){
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required|string|min:10|max:13|regex:/^[0-9]*$/',
            'alamat' => 'required'
        ],[
            'nama.required' => 'Kolom Nama Suplier tidak boleh kosong',
            'no_hp.required' => 'Kolom Nomor HP tidak boleh kosong',
            'no_hp.regex' => 'Kolom Nomor HP harus berupa angka',
            'no_hp.min' => 'Kolom Nomor HP minimal terdiri dari 10 digit',
            'no_hp.max' => 'Kolom Nomor HP maksimal terdiri dari 13 digit',
            'alamat.required' => 'Kolom Alamat tidak boleh kosong'
        ]);
        
        $suplier = Suplier::findOrFail($request->id);
        $suplier->update($request->all());

        Alert::success('Success','Data Berhasil Diupdate!');
        return redirect('/suplier');

        // dd($request->all());
    }
}
