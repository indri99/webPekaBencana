<?php

namespace App\Http\Controllers;

use App\Kontributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class kontributorController extends Controller
{
    //
    public function index(){
        if(!Session::get('loginKontributor')){
            return redirect('login-as-kontributor')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('kontributor');
        }
    }
    public function loginKontributor(){
        return view('login-as-kontributor');
    }
    public function loginKontributorPost(Request $request){
        $email = $request->email;
        $password = $request->password;
        $data = Kontributor::where('email',$email)->first();
        if(count($data) > 0){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama',$data->nama);
                Session::put('email',$data->email);
                Session::put('loginKontributor',TRUE);
                return redirect('kontributor');
            }
            else{
                return redirect('login-as-kontributor')->with('alert','Password atau Email Salah!'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('login-as-kontributor')->with('alert','Password atau Email Salah!');
        }
    }
    public function logoutKontributor(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }
    public function registerKontributor(Request $request){
        return view('register-as-kontributor');
    }
    public function registerKontributorPost(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:4',
            'email' => 'required|min:4|email|unique:Kontributors',
            'password' => 'required',
            'konfirmasi' => 'required|same:password',
        ]);
        $data =  new Kontributor();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login-as-kontributor')->with('alert-success','Kamu berhasil Register');
    }
}
