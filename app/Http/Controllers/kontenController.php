<?php

namespace App\Http\Controllers;

use App\Konten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class kontenController extends Controller
{
    //
    public function index(){
        $konten = Konten::all();
        return view('administratorList', compact('konten'));
    }
    public function destroy($id){
        $destroy = Konten::find($id)->delete();
        return redirect()->back();
    }
    public function kontenPost(Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'kabupatenkota' => 'required',
            'provinsi' => 'required',
            'kategori' => 'required',
            'isi' => 'required',
            'foto' => 'required',
        ]);
        $data =  new Konten();
        $data->judul = $request->judul;
        $data->kabupatenkota = $request->kabupatenkota;
        $data->provinsi = $request->provinsi;
        $data->kategori = $request->kategori;
        $data->isi = $request->isi;
        $data->foto = $request->foto;
        $data->save();
        return redirect('tambah-konten-post')->with('alert-success','Kamu berhasil Menambah Konten');
    }
}
