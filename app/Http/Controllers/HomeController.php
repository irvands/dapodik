<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Customer;
// use App\Models\Suplier;
// use App\Models\Produk;
// use App\Models\User;
use App\Models\Npsn;
use App\Models\Nomenklatur;
use App\Models\Usernamedapodik;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        if(Auth::user()->role == 'Admin'){
            $pending = Npsn::where('status','Pending')->count();
            $diteruskan = Npsn::where('status','Diteruskan')->count();
            $ditolak = Npsn::where('status','Ditolak')->count();
            $disetujui = Npsn::where('status','Disetujui')->count();

            $nomenklaturpending = Nomenklatur::where('status','Pending')->count();
            $nomenklaturditeruskan = Nomenklatur::where('status','Diteruskan')->count();
            $nomenklaturditolak = Nomenklatur::where('status','Ditolak')->count();
            $nomenklaturdisetujui = Nomenklatur::where('status','Disetujui')->count();

            $usernamepending = Usernamedapodik::where('status','Pending')->count();
            $usernamediteruskan = Usernamedapodik::where('status','Diteruskan')->count();
            $usernameditolak = Usernamedapodik::where('status','Ditolak')->count();
            $usernamedisetujui = Usernamedapodik::where('status','Disetujui')->count();

            return view('home',['pending'=>$pending,'diteruskan'=>$diteruskan,'ditolak'=>$ditolak,'disetujui'=>$disetujui,
            'nomenklaturpending'=>$nomenklaturpending,'nomenklaturditeruskan'=>$nomenklaturditeruskan,'nomenklaturditolak'=>$nomenklaturditolak,'nomenklaturdisetujui'=>$nomenklaturdisetujui,
            'usernamepending'=>$usernamepending,'usernamediteruskan'=>$usernamediteruskan,'usernameditolak'=>$usernameditolak,'usernamedisetujui'=>$usernamedisetujui]);
        
        }elseif(Auth::user()->role == 'User'){
            $pending = Npsn::where([['status','Pending'],['id_pengaju',Auth::user()->id]])->count();
            $disetujui = Npsn::where([['status','Disetujui'],['id_pengaju',Auth::user()->id]])->count();
            $ditolak = Npsn::where([['status','Ditolak'],['id_pengaju',Auth::user()->id]])->count();

            $nomenklaturpending = Nomenklatur::where([['status','Pending'],['id_pengaju',Auth::user()->id]])->count();
            $nomenklaturditolak = Nomenklatur::where([['status','Disetujui'],['id_pengaju',Auth::user()->id]])->count();
            $nomenklaturdisetujui = Nomenklatur::where([['status','Disetujui'],['id_pengaju',Auth::user()->id]])->count();

            $usernamepending= Usernamedapodik::where([['status','Pending'],['id_pengaju',Auth::user()->id]])->count();
            $usernameditolak = Usernamedapodik::where([['status','Disetujui'],['id_pengaju',Auth::user()->id]])->count();
            $usernamedisetujui = Usernamedapodik::where([['status','Disetujui'],['id_pengaju',Auth::user()->id]])->count();

            return view('home',['pending'=>$pending,'disetujui'=>$disetujui,'ditolak'=>$ditolak,
            'nomenklaturpending'=>$nomenklaturpending,'nomenklaturditolak'=>$nomenklaturditolak,'nomenklaturdisetujui'=>$nomenklaturdisetujui,
            'usernamepending'=>$usernamepending,'usernameditolak'=>$usernameditolak,'usernamedisetujui'=>$usernamedisetujui]);
        
        }else{

            $permintaan = Npsn::where('status','Diteruskan')->count();
            $selesai = Npsn::whereNotNull('npsn')->where('status','Disetujui')->count();

            $permintaannomenklatur = Nomenklatur::where('status','Diteruskan')->count();
            $nomenklaturselesai = Nomenklatur::whereNotNull('aktif')->where('status','Disetujui')->count();

            $permintaanusername = Usernamedapodik::where('status','Diteruskan')->count();
            $usernameselesai = Usernamedapodik::whereNotNull('username')->where('status','Disetujui')->count();
            return view('home',['permintaan'=>$permintaan,'selesai'=>$selesai,'permintaannomenklatur'=>$permintaannomenklatur,'nomenklaturselesai'=>$nomenklaturselesai
            ,'permintaanusername'=>$permintaanusername,'usernameselesai'=>$usernameselesai]);
        }
    }
}
