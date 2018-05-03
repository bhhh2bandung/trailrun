@extends('index')
@include('layouts.header')
@section('content')
                        <main>
                            <div class="bg-reg content">
                                        <div class="pt-5 pb-5">
                                            <div class="container ">
                                                   <div class=" bg-default uk-inline">
                                                      <img src="{{ asset('img/bg-reg4.png') }}" class="uk-visible@m" alt="">
                                                      <div class="uk-position-center">
                                                        <div style="display:none;" id="kodeunik" >
                                                          {{ $data->id }}
                                                        </div>
                                                        
                                                            <h3 class="display-1 text-white content bold uk-visible@m" id="kode"></h3>
                                                            <p class="title text-white text-center h4">{{ $data->upload->peserta->kelamin->kode }} | {{ $data->upload->peserta->kategori->judul }}</p>
                                                      </div>
                                                      <div class="uk-card-body text-center text-white bold uk-hidden@m">
                                                        <p class="uk-margin-remove upper"> Nomor Peserta Lomba</p>
                                                          <div class="uk-placeholder">
                                                              <h3>000{{ $data->id }}</h3>
                                                          </div>
                                                        <small>Selamat anda telah resmi menjadi peserta lomba BHHH2 Trail Run 2018. Pastikan anda hadir untuk mengikuti lomba.</small>
                                                      </div>
                                                    </div>
                                                     <!-- account -->
                                                          <div class="uk-card-body uk-card-default uk-visible@m">
                                                              <div class="uk-grid-divider uk-child-width-expand@s upper default " uk-grid>
                                                                      <div>
                                                                          <div class="">
                                                                              <p class="uk-margin-remove">Nama : {{ Auth::user()->name }}</p>
                                                                          </div>
                                                                      </div>
                                                                      <div>
                                                                          <div class="">
                                                                              <p class="uk-margin-remove">No Peserta lomba : <b>000{{ $data->id}}</b></p>
                                                                          </div>
                                                                      </div>
                                                                      <div>
                                                                          <div class="">
                                                                              <p class="uk-margin-remove">Status  :  <b class="btn-success  btn-sm">{{ $data->status }} verifikasi</b></p>
                                                                          </div>
                                                                      </div>
                                                                      
                                                                  </div>
                                                          </div>

                                                          <div class="uk-card-default upper default uk-hidden@m">
                                                              <div class="uk-padding-small">
                                                                <ul class="uk-list">
                                                                  <li>Nama : {{ Auth::user()->name }}</li>
                                                                  <li>Status  :   <b class="bg-success text-white  btn-sm"><small>{{ $data->status }} verifikasi</small></b></li>
                                                                </ul>
                                                              </div>
                                                            </div>
                                                          <!-- <a class="uk-button bg-default text-white btn-block" href="" title="" data-toggle="modal" data-target="#exampleModalLong">lihat detail akun anda</a> -->
                                                          <!-- informasi -->
                                                          
                                                          <div class="pt-3">
                                                                <div class="card   uk-card-body black">
                                                                    <p class="default bold upper">Informasi peserta</p>
                                                                      <ul class="list-group">
                                                                        <li>Selamat Anda sudah resmi terdaftar sebagai peserta lomba.</li>
                                                                        <li>Pastikan anda membawa KTP (Kartu Tanda Penduduk) yang asli sebagai identitas yang akan ditunjukan kepada panitia lomba untuk pengambilan nomor peserta, kaos dan sourvenir lainnya.</li>
                                                                        <li>Jika peserta lomba membatalkan lomba atau berhalangan hadir, wajib memberitahu panitia lomba melalui Email kami. Biaya yang sudah ditransfer tidak bisa dikembalikan.</li>
                                                                        <li>Pastikan peserta lomba hadir 30 menit sebelum perlombaan berlangsung.</li>
                                                                      </ul>
                                                                </div>
                                                                <a class="btn btn-warning  btn-block" href="/peserta" title="">Lihat Peserta Lomba</a>
                                                          </div>
                                              </div>
                                        </div>
                          </div>
                </main>


             <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title default bold" id="exampleModalLongTitle"><i class="uk-icon uk-margin-small-right" uk-icon="icon:info"></i>Details Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                
                <table class="uk-table">
    <tbody>
        <tr>
            <td class="default bold">Nama Lengkap</td>
            <td>:</td>
            <td>{{ Auth::user()->name }}</td>
        </tr>
        <tr>
            <td class="default bold">Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $data->upload->peserta->kelamin }}</td>
        </tr>
        <tr>
            <td class="default bold">Komunitas</td>
            <td>:</td>
            <td>{{ $data->upload->peserta->komunitas }}</td>
        </tr>
        <tr>
            <td class="default bold">Kategori lomba</td>
            <td>:</td>
            <td>{{ $data->upload->peserta->tiket->judul }}</td>
        </tr>
        <tr>
            <td class="default bold">Ukuran Kaos</td>
            <td>:</td>
            <td>{{ $data->upload->peserta->kaos }}</td>
        </tr>
    </tbody>
</table>

      </div>
      <div class="modal-footer">
        <button type="button" class="uk-button btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" >
                                                          
                                                        </script>
@endsection
