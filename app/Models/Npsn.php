<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Npsn extends Model
{
    use HasFactory;

    protected $table = "npsn";

    protected $fillable = [
        'npsn',
        'id_pengaju',
        'nama_sekolah',
        'surat_permohonan',
        'surat_ijin_pendirian',
        'sk_luas_tanah_milik',
        'sk_luas_bukan_milik',
        'foto_papan',
        'foto_sekolah',
        'alamat',
        'koordinat',
        'status',
        'keterangan',
        'petugas_proses'
    ];

    public function pengaju(){
    	return $this->belongsTo('App\Models\User','id_pengaju');
    }
}
