<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validasinomenklatur extends Model
{
    use HasFactory;

    protected $table = "validasinomenklatur";

    protected $fillable = [
        'id_permintaan',
        'petugas_validasi',
        'status'
    ];

    public function sekolah(){
    	return $this->belongsTo('App\Models\Nomenklatur','id_permintaan');
    }
}
