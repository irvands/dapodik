<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Alert;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $customer = Customer::orderBy('updated_at','DESC')->paginate(5);
        return view('customer.index',['customer'=>$customer]);
    }

    public function addindex(){
       
        return view('customer.add');
    }

    public function add(Request $request){
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'nullable|string|min:10|max:13|regex:/^[0-9]*$/'
        ],
        [
            'nama.required' => 'Kolom Nama Customer tidak boleh kosong',
            'no_hp.regex' => 'Kolom Nomor HP harus berupa angka',
            'no_hp.min' => 'Kolom Nomor HP minimal terdiri dari 10 digit',
            'no_hp.max' => 'Kolom Nomor HP maksimal terdiri dari 13 digit'
        ]);
        
       
        Customer::create($request->all());
        Alert::success('Success','Data Berhasil Ditambah !');
        return redirect('/customer');
    }

    public function destroy($id){
       
        $customer = Customer::find($id);
        $customer->delete();
        Alert::success('Success','Data Berhasil Dihapus! !');
        return redirect('/customer');
    }

    public function update(Request $request){
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'nullable|string|min:10|max:13|regex:/^[0-9]*$/'
        ],
        [
            'nama.required' => 'Kolom Nama Customer tidak boleh kosong',
            'no_hp.regex' => 'Kolom Nomor HP harus berupa angka',
            'no_hp.min' => 'Kolom Nomor HP minimal terdiri dari 10 digit',
            'no_hp.max' => 'Kolom Nomor HP maksimal terdiri dari 13 digit'
        ]);
        
        $customer = Customer::findOrFail($request->id);
        $customer->update($request->all());

        Alert::success('Success','Data Berhasil Diupdate!');
        return redirect('/customer');
    }
}
