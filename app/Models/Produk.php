<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = "produk";

    protected $fillable = [
        'barcode',
        'nama_produk',
        'id_kategori',
        'id_satuan',
        'harga',
        'stok'
    ];

    public function satuan(){
    	return $this->belongsTo('App\Models\Satuan','id_satuan');
    }

    public function kategori(){
    	return $this->belongsTo('App\Models\Kategori','id_kategori');
    }
}
