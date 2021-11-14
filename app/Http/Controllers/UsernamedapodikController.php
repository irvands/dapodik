<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usernamedapodik;
use App\Models\Validasiusername;
use Alert;
use Auth;
use App\Mail\Usernameemail;
use Illuminate\Support\Facades\Mail;
use PDF;

class UsernamedapodikController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
    $username = Usernamedapodik::where([['id_pengaju',Auth::user()->id],['status','Pending']])->orderBy('updated_at','DESC')->paginate(5);
    return view('user.username.index',['username'=>$username]);
   }

   public function usernamesekolahditolak(){
    $username = Validasiusername::orderBy('updated_at','DESC')->where('status','Permintaan Ditolak')->paginate(5);
    return view('user.username.ditolak',['username'=>$username]);
    }

    public function usernamesekolahdisetujui(){
        $username = Validasiusername::orderBy('updated_at','DESC')->where('status','Permintaan Disetujui')->paginate(5);
        return view('user.username.disetujui',['username'=>$username]);
    }

   public function addindex(){
    return view('user.username.add');
    }

    public function add(Request $request){
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'npsn' => 'required',
            'spu' => 'required|mimes:pdf|max:10000',
            'sto' => 'mimes:pdf|max:10000',
        ],[
            'nama.required' => 'Nama Sekolah tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'npsn.required' => 'Npsn tidak boleh kosong',
            'spu.required' => 'Surat Permohonan Username tidak boleh kosong',
            'sto.required' => 'Surat Tugas Operator tidak boleh kosong',

            'spu.mimes' => 'Surat Permohonan Username Harus Bertipe PDF',
            'sto.mimes' => 'Surat Tugas Operator Harus Bertipe PDF'
        ]);

        $filespu = $request->spu;
		$nama_file_spu = time()."_".$request->nama."_"."surat_permohonan_username".".".$filespu->getClientOriginalExtension();
		$tujuan_upload_spu = 'Dokumen/username/Surat Permohonan Username';
        $filespu->move($tujuan_upload_spu,$nama_file_spu);

        $filesto = $request->sto;
		$nama_file_sto = time()."_".$request->nama."_"."surat_tugas_operator".".".$filesto->getClientOriginalExtension();
		$tujuan_upload_sto = 'Dokumen/username/Surat Tugas Operator';
        $filesto->move($tujuan_upload_sto,$nama_file_sto);
 
        Usernamedapodik::create([
         'keterangan' => 'Sedang dalam proses verifikasi',
         'status' => 'Pending',
         'id_pengaju' => Auth::user()->id,
         'nama_sekolah'=> $request->nama,
         'alamat'=> $request->alamat,
         'npsn'=> $request->npsn,
         'surat_permohonan_username'=> $nama_file_spu,
         'surat_tugas_operator'=> $nama_file_sto,
     ]);
 
     Alert::success('Success','Permintaan Berhasil Dibuat!');
     return redirect('/user/username-dapodik'); 
    }

    public function destroy($id){
        $username = Usernamedapodik::find($id);
        $username->delete();
        Alert::success('Success','Berhasil Dihapus! !');
        return redirect('/user/username-dapodik');
    }

    // ==============INI UNTUK AKUN ADMIN DAPODIK(VERIFIKASI)==========================
    public function usernamepending(){
        $username = Usernamedapodik::orderBy('updated_at','DESC')->where('status','Pending')->paginate(5);
        return view('admin.prosesusername.pending',['username'=>$username]);
    }

    public function usernamediteruskan(){
        $username = Validasiusername::orderBy('updated_at','DESC')->where('status','Menunggu Persetujuan')->paginate(5);
        return view('admin.prosesusername.diteruskan',['username'=>$username]);
    }

    public function usernameditolak(){
        $username = Validasiusername::orderBy('updated_at','DESC')->where('status','Permintaan Ditolak')->paginate(5);
        return view('admin.prosesusername.ditolak',['username'=>$username]);
    }

    public function usernamedisetujui(){
        $username = Validasiusername::orderBy('updated_at','DESC')->where('status','Permintaan Disetujui')->paginate(5);
        return view('admin.prosesusername.disetujui',['username'=>$username]);
    }

    public function teruskan($id){
        $username = Usernamedapodik::where('id',$id)->first();
        $data = array(
            'status'=>'Diteruskan',
            'keterangan'=>'Menunggu Persetujuan'
        );
        $username->update($data);

        Validasiusername::create([
            'id_permintaan' => $id,
            'petugas_validasi' => Auth::user()->name,
            'status' => 'Menunggu Persetujuan'
        ]);

        Alert::success('Success','Permintaan Berhasil Diteruskan!');
        return redirect('/admin/username-dapodik/diteruskan');
        
       }

       public function tolak(Request $request){
      
        $request->validate([
            'keterangan' => 'required',
        ],[
            'keterangan.required' => 'Keterangan tidak boleh kosong',
        ]);
        $username = Usernamedapodik::where('id',$request->id)->first();
        $data = array(
            'status'=>'Ditolak',
            'keterangan'=>$request->keterangan
        );
        $username->update($data);

        Validasiusername::create([
            'id_permintaan' => $request->id,
            'petugas_validasi' => Auth::user()->name,
            'status' => 'Permintaan Ditolak'
        ]);

        Alert::success('Success','Permintaan Ditolak!');
        return redirect('/admin/username-dapodik/ditolak');
        
       }

        // ==============INI UNTUK AKUN PROVINSI==========================
        public function usernameprovinsi(){
            $username = Validasiusername::orderBy('updated_at','DESC')->where('status','Menunggu Persetujuan')->paginate(5);
            return view('provinsi.prosesusername.diteruskan',['username'=>$username]);
            
        }
    
        public function inputusername(){
            $username = Usernamedapodik::orderBy('updated_at','DESC')->whereNull('username')->where('status','Disetujui')->paginate(5);
            return view('provinsi.prosesusername.inputusername',['username'=>$username]);
        }

        public function download($id)
        {
           $path = public_path('img/logo.png');
           $type = pathinfo($path, PATHINFO_EXTENSION);
           $data = file_get_contents($path);
           $logo = 'data:image/'.$type.';base64,'.base64_encode($data);
            $username = Validasiusername::where('id',$id)->first();
            $beritaacara = PDF::loadview('provinsi.prosesusername.berita-acara',['username'=>$username,'logo'=>$logo]);
            return $beritaacara->stream();
        }

        public function setujui($id){
            $id_sekolah = Validasiusername::select('id_permintaan')->where('id',$id)->first();
    
            $username = Usernamedapodik::where('id',$id_sekolah->id_permintaan)->first();
            $validasiusername = Validasiusername::where('id',$id)->first();
            // return($npsn);
    
            $data = array(
                'status'=>'Disetujui',
                'keterangan'=>'Permintaan Disetujui, Menunggu Username Dapodik'
            );
            $username->update($data);
    
            $data2 = array(
                'status'=>'Permintaan Disetujui',
            );
            $validasiusername->update($data2);
    
    
    
            $id_pengaju = Usernamedapodik::select('id_pengaju')->where('id',$id_sekolah->id_permintaan)->first();
            $email = Usernamedapodik::join('users', 'id_pengaju', '=', 'users.id')->where('users.id',$id_pengaju->id_pengaju)
            ->select('users.email')->first();
            
            Mail::to($email)->send(new Usernameemail());
    
            Alert::success('Success','Permintaan Berhasil Disetujui!');
            return redirect('/provinsi/username-dapodik/input');
            
           }

           public function prosesinputusername(Request $request){
            // dd($request->all());
            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ],[
                'npsn.required' => 'NPSN tidak boleh kosong',
                'password.required' => 'password tidak boleh kosong',
            ]);
            $username = Usernamedapodik::where('id',$request->id)->first();
    
            $data = array(
                'username'=>$request->username,
                'password'=>$request->password,
                'Keterangan'=>'Permintaan Disetujui, Username Berhasil Dibuat'
            );
            $username->update($data);
    
            Alert::success('Success','Username Berhasil Ditambahkan!');
            return redirect('/provinsi/username-dapodik/selesai');
            
           }

           public function usernameselesai(){
            $username = Usernamedapodik::orderBy('updated_at','DESC')->whereNotNull('username')->where('status','Disetujui')->paginate(5);
            return view('provinsi.prosesusername.selesai',['username'=>$username]);
            }
    

}
