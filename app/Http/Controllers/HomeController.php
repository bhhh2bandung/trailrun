<?php

namespace App\Http\Controllers;

use App\Upload;
use App\Peserta;
use App\Status;
use App\User;
use App\Tiket;
use App\Kategori;
use App\Kelamin;
Use Session;
Use Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cari1 = Upload::where('peserta_id', Auth::user()->id)->first();
        
        $cari = Peserta::find(Auth::user()->id);

        //dd(Auth::user()->id);
        if(empty($cari1) && !empty($cari)){
            return view('peserta.upload')->with('peserta', Peserta::all())->with('data',$cari)->with('upload',Upload::all())->with('tiket', Tiket::all());
        }
        elseif (count($cari) > 0){
            $verifikasi = Status::where('upload_id', $cari1->id)->first();
            if(count($verifikasi) > 0){
               return view('peserta.aktif')->with('data', $verifikasi)->with('user', User::all());
            }elseif(count($cari1) > 0){
                return view('peserta.index')->with('peserta', $cari)->with('data', $cari1)->with('upload',Upload::all()); 
            }
            }
        
        else{
            return view('peserta.create')->with('tiket', Tiket::all())->with('kategori', Kategori::all())->with('kelamin', Kelamin::all());
        }


    }
}
