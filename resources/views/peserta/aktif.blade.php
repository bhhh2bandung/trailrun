@extends('index')
@include('layouts.header')
@section('content')
    <main>
      <div class="space-m">
        <div class="container">
          <!-- Badge information -->
          <ul class="nav nav-activity-profile ">
            <li class="nav-item card bg-default upper mr-2 uk-visible@m"><a href="" class="nav-link text-white"><i class="icon uk-inline fa fa-user-circle fa-3x"></i> isi formulir</a></li>
            <li class="nav-item card bg-default upper mr-2 uk-visible@m"><a href="" class="nav-link text-white"><i class="icon uk-inline fa fa-credit-card fa-3x"></i> pembayran tiket</a></li>
            <li class="nav-item card upper mr-2 bg-default uk-visible@m"><a href="" class="nav-link text-white"><i class="icon uk-inline ion-document-text"></i> verifikasi</a></li>
            <li class="nav-item card upper bg-warning "><a href="" class="nav-link default"><i class="icon uk-inline fa fa-check-circle-o fa-3x "></i> selesai</a></li>
          </ul>
          
          <!-- Alert -->
          <div class="alert alert-solid alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <strong><i class="icon fa fa-warning"></i> Selesai !!</strong> Selamat anda resmi terdaftar sebagai peserta lomba.
          </div>
          <!-- Account -->
          <div style="display:none;" id="kodeunik" >{{ $data->id }}</div>
          <div class="row no-gutters">
              <div class="col-sm-4">
                <div class="card p-3 mr-2">
                  <h6 class="upper bold">Nama lengkap</h6>
                  <h1 class="upper">{{ Auth::user()->name }}</h1>
                  <span>BHHH2 TRAIL RUN 2018.</span>
                </div><!-- card -->
              </div><!-- col-6 -->
              <div class="col-sm-4">
                <div class="card p-3 mr-2">
                  <h6 class="upper bold">Nomor peserta</h6>
                  <h1 id="kode"></h1>
                  <span>BHHH2 TRAIL RUN 2018.</span>
                </div><!-- card -->
              </div><!-- col-6 -->
              <div class="col-sm-4">
                <div class="card bg-default p-3">
                  <h6 class="upper text-white bold">account details</h6>
                  <a href="#" title="" class="text-warning"><h1 class="upper"><i class="icon fa fa-download"></i> Download</h1></a>
                  <span class="text-white">BHHH2 TRAIL RUN 2018.</span>
                </div><!-- card -->
              </div><!-- col-6 -->
            </div>
            <!-- Details -->
            <div class="">
              <label class="section-label-sm upper bold">information</label>
              <small><ul class="list-group">
                <li>Selamat Anda sudah resmi terdaftar sebagai peserta lomba.</li>
                <li>Untuk mengetahui details account silahkan klik download pada button di atas.</li>
                <li>Pastikan anda membawa KTP (Kartu Tanda Penduduk) yang asli sebagai identitas yang akan ditunjukan kepada panitia lomba untuk pengambilan nomor peserta, kaos dan sourvenir lainnya.</li>
                <li>Jika peserta lomba membatalkan lomba atau berhalangan hadir, wajib memberitahu panitia lomba melalui Email kami. Biaya yang sudah ditransfer tidak bisa dikembalikan.</li>
                <li>Peserta di sarankan memakai sepatu untuk mengikuti perlombaan.</li>
                <li>Pastikan peserta lomba hadir 30 menit sebelum perlombaan berlangsung.</li>
              </ul></small>
            </div>
            <!-- End details -->
        </div>
      </div>
    </main>
@endsection
