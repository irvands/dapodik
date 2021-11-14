<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomenklatur extends Model
{
    use HasFactory;

    protected $table = "nomenklatur";

    protected $fillable = [
        'id_pengaju',
        'nama_sekolah',
        'alamat',
        'nomenklatur_baru',
        'surat_perubahan_nama_sekolah',
        'surat_ijin_operasional',
        'sk_kemenkumham',
        'surat_pengantar_cabang_dinas',
        'surat_permohonan_sekolah',
        'status',
        'keterangan',
        'aktif'
    ];

    public function pengaju(){
    	return $this->belongsTo('App\Models\User','id_pengaju');
    }
}
