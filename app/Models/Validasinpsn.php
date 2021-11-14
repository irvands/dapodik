<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validasinpsn extends Model
{
    use HasFactory;

    protected $table = "validasinpsn";

    protected $fillable = [
        'id_permintaan',
        'petugas_validasi',
        'status'
    ];

    public function sekolah(){
    	return $this->belongsTo('App\Models\Npsn','id_permintaan');
    }

}
