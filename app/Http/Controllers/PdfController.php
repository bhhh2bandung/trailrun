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

class PdfController extends Controller
{
    public function laporanall()
    {
        $data = Status::all();
        $pdf = PDF::loadView('laporan.all', ['status' => $data]);
        return $pdf->download(date("d-m-Y"));
    }
    public function laporan()
    {
    	return view('laporan.laporan');
    }
}
