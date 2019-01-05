<?php

namespace App\Http\Controllers;

use App\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class administratorController extends Controller
{
    //
    public function index(){
        if(!Session::get('loginAdministrator')){
            return redirect('login-as-administrator')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('administrator');
        }
    }
    public function loginAdministrator(){
        return view('login-as-administrator');
    }
    public function loginAdministratorPost(Request $request){
        $email = $request->email;
        $password = $request->password;
        $data = Administrator::where('email',$email)->first();
        if(count($data) > 0){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama',$data->nama);
                Session::put('email',$data->email);
                Session::put('loginAdministrator',TRUE);
                return redirect('administrator');
            }
            else{
                return redirect('login-as-administrator')->with('alert','Password atau Email Salah !'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('login-as-administrator')->with('alert','Password atau Email Salah !');
        }
    }
    public function logoutAdministrator(){
        Session::flush();
        return redirect('/')->with('alert','Kamu sudah logout');
    }
    public function registerAdministrator(Request $request){
        return view('register-as-administrator');
    }
    public function registerAdministratorPost(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:4',
            'email' => 'required|min:4|email|unique:Administrators',
            'password' => 'required',
            'konfirmasi' => 'required|same:password',
        ]);
        $data =  new Administrator();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login-as-administrator')->with('alert-success','Kamu berhasil Register');
    }
}
