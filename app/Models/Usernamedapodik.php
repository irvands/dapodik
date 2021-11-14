<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usernamedapodik extends Model
{
    use HasFactory;

    protected $table = "usernamedapodiks";

    protected $fillable = [
        'npsn',
        'id_pengaju',
        'nama_sekolah',
        'alamat',
        'surat_permohonan_username',
        'surat_tugas_operator',
        'username',
        'password',
        'status',
        'keterangan',
    ];

    public function pengaju(){
    	return $this->belongsTo('App\Models\User','id_pengaju');
    }
}
