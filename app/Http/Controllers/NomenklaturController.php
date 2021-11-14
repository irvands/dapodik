<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nomenklatur;
use App\Models\Validasinomenklatur;
use Alert;
use Auth;
use App\Mail\Nomenklaturemail;
use Illuminate\Support\Facades\Mail;
use PDF;

class NomenklaturController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
    $nomenklatur = Nomenklatur::where([['id_pengaju',Auth::user()->id],['status','Pending']])->orderBy('updated_at','DESC')->paginate(5);
    return view('user.nomenklatur.index',['nomenklatur'=>$nomenklatur]);
   }

   public function nomenklatursekolahditolak(){
    $nomenklatur = Validasinomenklatur::orderBy('updated_at','DESC')->where('status','Permintaan Ditolak')->paginate(5);
    return view('user.nomenklatur.ditolak',['nomenklatur'=>$nomenklatur]);
    }

    public function nomenklatursekolahdisetujui(){
        $nomenklatur = Validasinomenklatur::orderBy('updated_at','DESC')->where('status','Permintaan Disetujui')->paginate(5);
        return view('user.nomenklatur.disetujui',['nomenklatur'=>$nomenklatur]);
    }

   public function addindex(){
    return view('user.nomenklatur.add');
    }

    public function add(Request $request){
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nomenklatur' => 'required',
            'spns' => 'required|mimes:pdf|max:10000',
            'si' => 'mimes:pdf|max:10000',
            'skk' => 'required|mimes:pdf|max:10000',
            'spc' => 'required|mimes:pdf|max:10000',
            'sps' => 'required|mimes:pdf|max:10000',
        ],[
            'nama.required' => 'Nama Sekolah tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'nomenklatur.required' => 'Nomenklatur tidak boleh kosong',
            'spns.required' => 'Surat Perubahan Nama Sekolah tidak boleh kosong',
            'skk.required' => 'Surat Keterangan KEMENKUMHAM tidak boleh kosong',
            'spc.required' => 'Surat Pengantar Cabang Dinas tidak boleh kosong',
            'sps.required' => 'Surat Permohanan Sekolah tidak boleh kosong',

            'spns.mimes' => 'Surat Perubahan Nama Sekolah Harus Bertipe PDF',
            'skk.mimes' => 'Surat Keterangan KEMENKUMHAM Harus Bertipe PDF',
            'spc.mimes' => 'Surat Pengantar Cabang Dinas Harus Bertipe PDF',
            'sps.mimes' => 'Surat Permohanan Sekolah Harus Bertipe PDF',
            'si.mimes' => 'Surat Ijin Operasional Harus Bertipe PDF',
        ]);

        $filespns = $request->spns;
		$nama_file_spns = time()."_".$request->nama."_"."surat_perubahan_nama_sekolah".".".$filespns->getClientOriginalExtension();
		$tujuan_upload_spns = 'Dokumen/Nomenklatur/Surat Perubahan Nama Sekolah';
        $filespns->move($tujuan_upload_spns,$nama_file_spns);

        $filesi = $request->si;
		$nama_file_si = time()."_".$request->nama."_"."surat_ijin_operasional".".".$filesi->getClientOriginalExtension();
		$tujuan_upload_si = 'Dokumen/Nomenklatur/Surat Ijin Operasional';
        $filesi->move($tujuan_upload_si,$nama_file_si);

        $fileskk = $request->skk;
		$nama_file_skk = time()."_".$request->nama."_"."surat_keterangan_kemenkumham".".".$fileskk->getClientOriginalExtension();
		$tujuan_upload_skk = 'Dokumen/Nomenklatur/Surat Keterangan KEMENKUMHAM';
        $fileskk->move($tujuan_upload_skk,$nama_file_skk);

        $filespc = $request->spc;
		$nama_file_spc = time()."_".$request->nama."_"."surat_pengantar_cabang_dinas".".".$filespc->getClientOriginalExtension();
		$tujuan_upload_spc = 'Dokumen/Nomenklatur/Surat Pengantar Cabang Dinas';
        $filespc->move($tujuan_upload_spc,$nama_file_spc);

        $filesps = $request->sps;
		$nama_file_sps = time()."_".$request->nama."_"."surat_permohanan_sekolah".".".$filesps->getClientOriginalExtension();
		$tujuan_upload_sps = 'Dokumen/Nomenklatur/Surat Permohanan Sekolah';
        $filesps->move($tujuan_upload_sps,$nama_file_sps);
 
        Nomenklatur::create([
         'keterangan' => 'Sedang dalam proses verifikasi',
         'status' => 'Pending',
         'id_pengaju' => Auth::user()->id,
         'nama_sekolah'=> $request->nama,
         'alamat'=> $request->alamat,
         'nomenklatur_baru'=> $request->nomenklatur,
         'surat_perubahan_nama_sekolah'=> $nama_file_spns,
         'surat_ijin_operasional'=> $nama_file_si,
         'sk_kemenkumham'=> $nama_file_skk,
         'surat_pengantar_cabang_dinas'=> $nama_file_spc,
         'surat_permohonan_sekolah'=> $nama_file_sps
     ]);
 
     Alert::success('Success','Permintaan Berhasil Dibuat!');
     return redirect('/user/nomenklatur'); 
    }

    public function destroy($id){
        $nomenklatur = Nomenklatur::find($id);
        $nomenklatur->delete();
        Alert::success('Success','Berhasil Dihapus! !');
        return redirect('/user/nomenklatur');
    }

    // ==============INI UNTUK AKUN ADMIN DAPODIK(VERIFIKASI)==========================
    public function nomenklaturpending(){
        $nomenklatur = Nomenklatur::orderBy('updated_at','DESC')->where('status','Pending')->paginate(5);
        return view('admin.prosesnomenklatur.pending',['nomenklatur'=>$nomenklatur]);
    }

    public function nomenklaturditeruskan(){
        $nomenklatur = Validasinomenklatur::orderBy('updated_at','DESC')->where('status','Menunggu Persetujuan')->paginate(5);
        return view('admin.prosesnomenklatur.diteruskan',['nomenklatur'=>$nomenklatur]);
    }

    public function nomenklaturditolak(){
        $nomenklatur = Validasinomenklatur::orderBy('updated_at','DESC')->where('status','Permintaan Ditolak')->paginate(5);
        return view('admin.prosesnomenklatur.ditolak',['nomenklatur'=>$nomenklatur]);
    }

    public function nomenklaturdisetujui(){
        $nomenklatur = Validasinomenklatur::orderBy('updated_at','DESC')->where('status','Permintaan Disetujui')->paginate(5);
        return view('admin.prosesnomenklatur.disetujui',['nomenklatur'=>$nomenklatur]);
    }

    public function teruskan($id){
        $nomenklatur = Nomenklatur::where('id',$id)->first();
        $data = array(
            'status'=>'Diteruskan',
            'keterangan'=>'Menunggu Persetujuan'
        );
        $nomenklatur->update($data);

        Validasinomenklatur::create([
            'id_permintaan' => $id,
            'petugas_validasi' => Auth::user()->name,
            'status' => 'Menunggu Persetujuan'
        ]);

        Alert::success('Success','Permintaan Berhasil Diteruskan!');
        return redirect('/admin/nomenklatur/diteruskan');
        
       }

       public function tolak(Request $request){
      

        $request->validate([
            'keterangan' => 'required',
        ],[
            'keterangan.required' => 'Keterangan tidak boleh kosong',
        ]);
        $nomenklatur = Nomenklatur::where('id',$request->id)->first();
        $data = array(
            'status'=>'Ditolak',
            'keterangan'=>$request->keterangan
        );
        $nomenklatur->update($data);

        Validasinomenklatur::create([
            'id_permintaan' => $request->id,
            'petugas_validasi' => Auth::user()->name,
            'status' => 'Permintaan Ditolak'
        ]);

        Alert::success('Success','Permintaan Ditolak!');
        return redirect('/admin/nomenklatur/ditolak');
        
       }


       // ==============INI UNTUK AKUN PROVINSI==========================
       public function nomenklaturprovinsi(){
        $nomenklatur = Validasinomenklatur::orderBy('updated_at','DESC')->where('status','Menunggu Persetujuan')->paginate(5);
        return view('provinsi.prosesnomenklatur.diteruskan',['nomenklatur'=>$nomenklatur]);
        
    }

    public function download($id)
    {
       $path = public_path('img/logo.png');
       $type = pathinfo($path, PATHINFO_EXTENSION);
       $data = file_get_contents($path);
       $logo = 'data:image/'.$type.';base64,'.base64_encode($data);
        $nomenklatur = Validasinomenklatur::where('id',$id)->first();
    	$beritaacara = PDF::loadview('provinsi.prosesnomenklatur.berita-acara',['nomenklatur'=>$nomenklatur,'logo'=>$logo]);
    	return $beritaacara->stream();
    }


    public function setujui($id){
        $id_sekolah = Validasinomenklatur::select('id_permintaan')->where('id',$id)->first();

        $nomenklatur = Nomenklatur::where('id',$id_sekolah->id_permintaan)->first();
        $validasinomenklatur = Validasinomenklatur::where('id',$id)->first();
        // return($npsn);

        $data = array(
            'status'=>'Disetujui',
            'keterangan'=>'Permintaan Disetujui, Menunggu Nomenklatur Diaktifkan'
        );
        $nomenklatur->update($data);

        $data2 = array(
            'status'=>'Permintaan Disetujui',
        );
        $validasinomenklatur->update($data2);



        $id_pengaju = Nomenklatur::select('id_pengaju')->where('id',$id_sekolah->id_permintaan)->first();
        $email = Nomenklatur::join('users', 'id_pengaju', '=', 'users.id')->where('users.id',$id_pengaju->id_pengaju)
        ->select('users.email')->first();
        
        Mail::to($email)->send(new Nomenklaturemail());

        Alert::success('Success','Permintaan Berhasil Disetujui!');
        return redirect('/provinsi/nomenklatur/aktivasi');
        
       }

       public function aktivasi(){
        $nomenklatur = Nomenklatur::orderBy('updated_at','DESC')->whereNull('aktif')->where('status','Disetujui')->paginate(5);
        return view('provinsi.prosesnomenklatur.aktivasi',['nomenklatur'=>$nomenklatur]);
        }

        public function prosesaktivasi($id){
            $nomenklatur = Nomenklatur::where('id',$id)->first();
            $data = array(
                'aktif'=>'YA',
                'keterangan'=>'Permintaan Disetujui,Nomenklatur Aktif'
            );
            $nomenklatur->update($data);
            return redirect('/provinsi/nomenklatur/selesai');

        }

        public function nomenklaturselesai(){
        $nomenklatur = Nomenklatur::orderBy('updated_at','DESC')->whereNotNull('aktif')->where('status','Disetujui')->paginate(5);
        return view('provinsi.prosesnomenklatur.selesai',['nomenklatur'=>$nomenklatur]);
        }

    
}
