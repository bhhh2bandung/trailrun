<?php

namespace App\Http\Controllers;

use App\User;
use App\Peserta;
use App\Upload;
use App\Status;
use App\Tiket;
use App\Kelamin;
use App\Kategori;
use Session;
use Auth;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta.create')->with('tiket', Tiket::all())->with('kategori', Kategori::all())->with('lamin', Kelamin::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
        $this->validate($request, [
            'kaos' => 'required',
            'darah' => 'required',
            'kelamin_id' => 'required',
            'telepon' => 'required',
            'telepon1' => 'required',
            'tiket_id' => 'required',
            'kategori_id' => 'required',
            'tgl' => 'required',
            'alamat' => 'required',
            'ktp' => 'required',
            'umur' => 'required',
            'kota' => 'required',
            'pos' => 'required',
        ]);

        $data = new Peserta;
        $data->user_id = $request->user_id;
        $data->kaos = $request->kaos;
        $data->komunitas = $request->komunitas;
        $data->kelamin_id = $request->kelamin_id;
        $data->telepon = $request->telepon;
        $data->telepon1 = $request->telepon1;
        $data->tiket_id = $request->tiket_id;
        $data->kategori_id = $request->kategori_id;
        $data->darah = $request->darah;
        $data->tgl = $request->tgl;
        $data->ktp = $request->ktp;
        $data->alamat = $request->alamat;
        $data->kota = $request->kota;
        $data->umur = $request->umur;
        $data->pos = $request->pos;

        $data->save();
        Session::flash('succes','Formulir pendaftaran berhasil!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
