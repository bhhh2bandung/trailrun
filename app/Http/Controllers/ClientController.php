<?php

namespace App\Http\Controllers;

use App\Status;
use App\Upload;
use App\Peserta;
use App\Kategori;
use App\User;
use Mail;
use Alert;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index');
    }
    public function details()
    {
        return view('client.details');
    }
    public function peserta()
    {
        return view('client.peserta')->with('user',User::all())
            ->with('status',Status::all())
            ->with('peserta',Peserta::all())
            ->with('kategori',Kategori::all())
            ->with('Upload',Upload::all());
    }
    public function contact()
    {
        return view('client.kontak');
    }
    public function syarat()
    {
        return view('client.syarat');
    }
    public function gallery()
    {
        return view('client.gallery');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'email'  => 'required|email',
            'message' => 'required'
        ]);
        Mail::send('emails.contact-message', [
            'msg' => $request->message
        ], function ($mail) use($request){
            $mail->from($request->email, $request->name);
            $mail->to('senjayaml@gmail.com')->subject('Contact Message');
        });
        alert()->success('Terkirim', 'Terima kasih untuk anda');
        return redirect()->back();
    }
    public function search(Request $request)
    {
       $query = $request->get('q');
        $hasil = Status::where('judul', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('result', compact('hasil', 'query'));
    }
    public function kategori($id)
    {
        return view('client.kategori')->with('peserta', Kelamin::where('kategori_id', $id)->get())->with('user', User::all());
    }
    public function getDownload()
    {
        $filename = 'maps.jpg';
        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy('img/maps.jpg', $tempImage);

        return response()->download($tempImage, $filename);
    }
}
