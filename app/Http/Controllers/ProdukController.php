<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Satuan;
use App\Models\Kategori;
use Alert;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
    $produk = Produk::orderBy('updated_at','DESC')->paginate(5);
       return view('produk.produk.index',['produk'=>$produk]);
   }

   public function addindex(){
    $numb = Produk::all()->count();
    $barcode = 'BR'.sprintf('%06s', $numb+1);

    $kategori = Kategori::all();
    $satuan = Satuan::all();
    return view('produk.produk.add',[
    'barcode'=>$barcode,
    'kategori'=>$kategori,
    'satuan'=>$satuan]);
   }

   public function add(Request $request){
       $request->validate([
           'nama' => 'required',
           'harga' => 'required',
       ],[
           'nama.required' => 'Kolom Nama Produk tidak boleh kosong',
           'harga.required' => 'Kolom Harga tidak boleh kosong',
       ]);


       $pola = array('/\./','/,/');
        $harga = preg_replace($pola, '', $request->harga);
       Produk::create([
        'barcode' => $request->barcode,
        'nama_produk'=> $request->nama,
        'id_kategori'=> $request->kategori,
        'id_satuan'=> $request->satuan,
        'harga'=> $harga,
        'stok'=> $request->stok
    ]);

    Alert::success('Success','Data Berhasil Ditambah!');
    return redirect('/produk/data-produk/');

      
   }
}
