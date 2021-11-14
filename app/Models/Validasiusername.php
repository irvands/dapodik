<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validasiusername extends Model
{
    use HasFactory;

    protected $table = "validasiusername";

    protected $fillable = [
        'id_permintaan',
        'petugas_validasi',
        'status'
    ];

    public function sekolah(){
    	return $this->belongsTo('App\Models\Usernamedapodik','id_permintaan');
    }
}
