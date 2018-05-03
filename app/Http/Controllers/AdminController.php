<?php

namespace App\Http\Controllers;
use App\Peserta;
use App\Upload;
use App\User;
use App\Status;
use App\Tiket;
use App\Kategori;
use PDF;
use Mail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seller.home');
    }
    
    public function details()
    {
        return view('seller.aktif')->with('data', Status::all())
        ->with('user', User::all())
        ->with('upload', Upload::all())
        ->with('peserta', Peserta::all())
        ->with('tiket', Tiket::all())
        ->with('kategori', Kategori::all())
        ->with('status', Status::all());
    }
    
    public function report()
    {
        return view('seller.report')->with('data', Status::all())
        ->with('user', User::all())
        ->with('upload', Upload::all())
        ->with('peserta', Peserta::all())
        ->with('tiket', Tiket::all())
        ->with('kategori', Kategori::all())
        ->with('status', Status::all());
    }

    public function pdf()
    {
        $data = Status::all();
        $pdf = PDF::loadView('pdf', ['status', $data]);
        return $pdf->download(date("d-m-Y"));
    }

    public function request()
    {
        return view('seller.request')->with('user', User::all())->with('peserta', Peserta::all())->with('upload', Upload::all());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = new Status;
       $data->upload_id = $request->upload_id;
       $data->status = $request->status;

       $data->save();
       return redirect()->route('admin.details'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ida = Upload::find($id);
        $aa = Status::find($id);
        return view('seller.show')->with('data', $ida)
                                   ->with('ab', $aa)
                                  ->with('upload', Upload::all())
                                  ->with('status', Status::all())
                                  ->with('peserta', Peserta::all());
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

    public function mail($id)
    {
        $data = User::find($id);
        Mail::send('mail', $data, function($message) {
           $message->to('agung_senjay4@yahoo.com', 'Tutorials Point')->subject
              ('Laravel HTML Testing Mail');
           $message->from('senjayaml@gmail.com','Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox.";
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
        $data = Status::find($id);
        $data->delete();
        return redirect()->route('dashboard');
    }
}
