<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Npsn;
use App\Models\Validasinpsn;
use Alert;
use Auth;
use App\Mail\Npsnemail;
use Illuminate\Support\Facades\Mail;
use PDF;

class NpsnController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
    $npsn = Npsn::where([['id_pengaju',Auth::user()->id],['status','Pending']])->orderBy('updated_at','DESC')->paginate(5);
       return view('user.npsn.index',['npsn'=>$npsn]);
   }

   public function addindex(){
    return view('user.npsn.add');
    }

    public function npsnsekolahditolak(){
        $npsn = Validasinpsn::orderBy('updated_at','DESC')->where('status','Permintaan Ditolak')->paginate(5);
        return view('user.npsn.ditolak',['npsn'=>$npsn]);
    }

    public function npsnsekolahdisetujui(){
        $npsn = Validasinpsn::orderBy('updated_at','DESC')->where('status','Permintaan Disetujui')->paginate(5);
        return view('user.npsn.disetujui',['npsn'=>$npsn]);
    }

    public function add(Request $request){
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'koordinat' => 'required',
            'sp' => 'required|mimes:pdf|max:10000',
            'si' => 'required|mimes:pdf|max:10000',
            'sklm' => 'required|mimes:pdf|max:10000',
            'sklb' => 'required|mimes:pdf|max:10000',
            'fpapan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'fsek' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ],[
            'nama.required' => 'Nama Sekolah tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'koordinat.required' => 'Koordinat Lokasi tidak boleh kosong',
            'sp.required' => 'Surat Permohonan NPSN Baru tidak boleh kosong',
            'si.required' => 'Surat Ijin Pendirian & Operasional tidak boleh kosong',
            'sklm.required' => 'Surat Keterangan Luas Tanah Milik tidak boleh kosong',
            'sklb.required' => 'Surat Keterangan Luas Tanah Bukan Milik tidak boleh kosong',
            'fpapan.required' => 'Foto Papan Nama Sekolah tidak boleh kosong',
            'fsek.required' => 'Foto Sekolah Tampak Depan tidak boleh kosong',
            'sp.mimes' => 'Surat Permohonan Harus Bertipe PDF',
            'si.mimes' => 'Surat Ijin Pendirian & Operasional Harus Bertipe PDF',
            'sklm.mimes' => 'Surat Keterangan Luas Tanah Milik Harus Bertipe PDF',
            'sklb.mimes' => 'Surat Keterangan Luas Tanah Bukan Milik Harus Bertipe PDF',
            'fpapan.image' => 'Foto Papan Nama Sekolah Harus berupa Gambar',
            'fsek.image' => 'Foto Sekolah Tampak Depan Harus berupa Gambar',
            'fpapan.mimes' => 'Foto Papan Nama Sekolah Harus Bertipe jpg/jpeg/png',
            'fsek.mimes' => 'Foto Sekolah Tampak Depan tidak Bertipe jpg/jpeg/png',
        ]);


        $filesp = $request->sp;
		$nama_file_sp = time()."_".$request->nama."_"."surat_permohonan_NPSN_baru".".".$filesp->getClientOriginalExtension();
		$tujuan_upload_sp = 'Dokumen/Npsn/Surat Permohonan NPSN Baru';
        $filesp->move($tujuan_upload_sp,$nama_file_sp);

        $filesi = $request->si;
		$nama_file_si = time()."_".$request->nama."_"."surat_ijin_pendirian_operasional".".".$filesi->getClientOriginalExtension();
		$tujuan_upload_si = 'Dokumen/Npsn/Surat Ijin Pendirian & Operasional';
        $filesi->move($tujuan_upload_si,$nama_file_si);
        
        $filesklm = $request->sklm;
		$nama_file_sklm = time()."_".$request->nama."_"."surat_keterangan_luas_tanah_milik".".".$filesklm->getClientOriginalExtension();
		$tujuan_upload_sklm = 'Dokumen/Npsn/Surat Keterangan Luas Tanah Milik';
        $filesklm->move($tujuan_upload_sklm,$nama_file_sklm);
        
        $filesklb = $request->sklb;
		$nama_file_sklb = time()."_".$request->nama."_"."surat_keterangan_luas_tanah_bukan_milik".".".$filesklb->getClientOriginalExtension();
		$tujuan_upload_sklb = 'Dokumen/Npsn/Surat Keterangan Luas Tanah Bukan Milik';
        $filesklb->move($tujuan_upload_sklb,$nama_file_sklb);
        
        $filefpapan = $request->fpapan;
		$nama_file_fpapan = time()."_".$request->nama."_"."foto_papan_sekolah".".".$filefpapan->getClientOriginalExtension();
		$tujuan_upload_fpapan = 'Dokumen/Npsn/Foto Papan Nama Sekolah';
        $filefpapan->move($tujuan_upload_fpapan,$nama_file_fpapan);
        
        $filefsek = $request->fsek;
		$nama_file_fsek = time()."_".$request->nama."_"."foto_sekolah_tampak_depan".".".$filefsek->getClientOriginalExtension();
		$tujuan_upload_fsek = 'Dokumen/Npsn/Foto Sekolah Tampak Depan';
		$filefsek->move($tujuan_upload_fsek,$nama_file_fsek);
 
        Npsn::create([
         'keterangan' => 'Sedang dalam proses verifikasi',
         'status' => 'Pending',
         'id_pengaju' => Auth::user()->id,
         'nama_sekolah'=> $request->nama,
         'alamat'=> $request->alamat,
         'koordinat'=> $request->koordinat,
         'surat_permohonan'=> $nama_file_sp,
         'surat_ijin_pendirian'=> $nama_file_si,
         'sk_luas_tanah_milik'=> $nama_file_sklm,
         'sk_luas_bukan_milik'=> $nama_file_sklb,
         'foto_papan'=> $nama_file_fpapan,
         'foto_sekolah'=> $nama_file_fsek,
     ]);
 
     Alert::success('Success','Permintaan Berhasil Dibuat!');
     return redirect('/user/npsn'); 
    }

    public function destroy($id){
        $npsn = Npsn::find($id);
        $npsn->delete();
        Alert::success('Success','Berhasil Dihapus! !');
        return redirect('/user/npsn');
    }


    // ==============INI UNTUK AKUN ADMIN DAPODIK(VERIFIKASI)==========================
    public function npsnpending(){
        $npsn = Npsn::orderBy('updated_at','DESC')->where('status','Pending')->paginate(5);
        return view('admin.prosesnpsn.pending',['npsn'=>$npsn]);
    }

    public function npsndisetujui(){
        $npsn = Validasinpsn::orderBy('updated_at','DESC')->where('status','Permintaan Disetujui')->paginate(5);
        return view('admin.prosesnpsn.disetujui',['npsn'=>$npsn]);
    }

    public function npsnditeruskan(){
        $npsn = Validasinpsn::orderBy('updated_at','DESC')->where('status','Menunggu Persetujuan')->paginate(5);
        return view('admin.prosesnpsn.diteruskan',['npsn'=>$npsn]);
    }

    public function npsnditolak(){
        $npsn = Validasinpsn::orderBy('updated_at','DESC')->where('status','Permintaan Ditolak')->paginate(5);
        return view('admin.prosesnpsn.ditolak',['npsn'=>$npsn]);
    }

       public function teruskan($id){
        $npsn = Npsn::where('id',$id)->first();
        $data = array(
            'status'=>'Diteruskan',
            'keterangan'=>'Menunggu Persetujuan'
        );
        $npsn->update($data);

        Validasinpsn::create([
            'id_permintaan' => $id,
            'petugas_validasi' => Auth::user()->name,
            'status' => 'Menunggu Persetujuan'
        ]);

        Alert::success('Success','Permintaan Berhasil Diteruskan!');
        return redirect('/admin/npsn/diteruskan');
        
       }

       public function tolak(Request $request){

        $request->validate([
            'keterangan' => 'required',
        ],[
            'keterangan.required' => 'Keterangan tidak boleh kosong',
        ]);
        $npsn = Npsn::where('id',$request->id)->first();
        $data = array(
            'status'=>'Ditolak',
            'keterangan'=>$request->keterangan
        );
        $npsn->update($data);

        Validasinpsn::create([
            'id_permintaan' => $request->id,
            'petugas_validasi' => Auth::user()->name,
            'status' => 'Permintaan Ditolak'
        ]);

        Alert::success('Success','Permintaan Ditolak!');
        return redirect('/admin/npsn/ditolak');
        
       }

    //    ===============================================================================

    // ==============INI UNTUK AKUN PROVINSI==========================

    public function inputnpsn(){
        $npsn = Npsn::orderBy('updated_at','DESC')->whereNull('npsn')->where('status','Disetujui')->paginate(5);
        return view('provinsi.prosesnpsn.inputnpsn',['npsn'=>$npsn]);
    }

    public function npsnselesai(){
        $npsn = Npsn::orderBy('updated_at','DESC')->whereNotNull('npsn')->where('status','Disetujui')->paginate(5);
        return view('provinsi.prosesnpsn.selesai',['npsn'=>$npsn]);
    }
    
    public function npsnprovinsi(){

        $npsn = Validasinpsn::orderBy('updated_at','DESC')->where('status','Menunggu Persetujuan')->paginate(5);
        return view('provinsi.prosesnpsn.diteruskan',['npsn'=>$npsn]);
        
    }

    public function download($id)
    {
       $path = public_path('img/logo.png');
       $type = pathinfo($path, PATHINFO_EXTENSION);
       $data = file_get_contents($path);
       $logo = 'data:image/'.$type.';base64,'.base64_encode($data);
        $npsn = Validasinpsn::where('id',$id)->first();
    	$beritaacara = PDF::loadview('provinsi.prosesnpsn.berita-acara',['npsn'=>$npsn,'logo'=>$logo]);
    	return $beritaacara->stream();
    }

    public function setujui($id){
        $id_sekolah = Validasinpsn::select('id_permintaan')->where('id',$id)->first();

        $npsn = Npsn::where('id',$id_sekolah->id_permintaan)->first();
        $validasinpsn = Validasinpsn::where('id',$id)->first();
        // return($npsn);

        $data = array(
            'status'=>'Disetujui',
            'keterangan'=>'Permintaan Disetujui, Menunggu NPSN'
        );
        $npsn->update($data);

        $data2 = array(
            'status'=>'Permintaan Disetujui',
        );
        $validasinpsn->update($data2);



        $id_pengaju = Npsn::select('id_pengaju')->where('id',$id_sekolah->id_permintaan)->first();
        $email = Npsn::join('users', 'id_pengaju', '=', 'users.id')->where('users.id',$id_pengaju->id_pengaju)
        ->select('users.email')->first();
        
        Mail::to($email)->send(new Npsnemail());

        Alert::success('Success','Permintaan Berhasil Disetujui!');
        return redirect('/provinsi/npsn/input-npsn');
        
       }

       public function prosesinputnpsn(Request $request){
        // dd($request->all());
        $request->validate([
            'npsn' => 'required',
        ],[
            'npsn.required' => 'NPSN tidak boleh kosong',
        ]);
        $npsn = Npsn::where('id',$request->id)->first();

        $data = array(
            'npsn'=>$request->npsn,
            'Keterangan'=>'Permnintaan Disetujui, NPSN Berhasil Dibuat'
        );
        $npsn->update($data);

        Alert::success('Success','NPSN Berhasil Ditambahkan!');
        return redirect('/provinsi/npsn/selesai');
        
       }

        //    ===============================================================================

    
}
