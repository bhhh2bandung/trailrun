@extends('index')
@include('layouts.header')
@section('content')
  <main>
            <div class="">
                        <div class="space-m">
                            <div class="container">

                                <!-- Badge information -->
                                <ul class="nav nav-activity-profile ">
                                  <li class="nav-item card bg-default upper mr-2 uk-visible@m"><a href="" class="nav-link text-white"><i class="icon uk-inline fa fa-user-circle fa-3x"></i> isi formulir</a></li>
                                  <li class="nav-item card bg-default upper mr-2 uk-visible@m"><a href="" class="nav-link text-white"><i class="icon uk-inline fa fa-credit-card fa-3x"></i> pembayran tiket</a></li>
                                  <li class="nav-item card upper mr-2 bg-default"><a href="" class="nav-link text-white"><i class="icon uk-inline ion-document-text"></i> verifikasi</a></li>
                                  <li class="nav-item card upper uk-visible@m"><a href="" class="nav-link default"><i class="icon uk-inline fa fa-check-circle-o fa-3x "></i> selesai</a></li>
                                </ul>
                                <!-- Keterangan -->
                                
                                <!-- Account -->
                                <div class="row pd-t-30">
                                  <div class="col-md">
                                    <label class="section-label-sm bold upper">Account</label>
                                    <div class="billed-to">
                                      <h6 class="tx-gray-800 capt">{{ Auth::user()->name }}</h6>
                                      <small><p>Kategori Lomba : {{ $data->peserta->tiket->judul }}<br>
                                      Tel No: {{ $data->peserta->telepon }}<br>
                                      Email: {{ $data->peserta->user->email }} <br>
                                      <span class="">Status  :  <b class="btn-primary btn text-white  btn-sm">menunggu verifikasi</b></span>
                                  </p></small>
                                    </div>
                                  </div><!-- col -->
                                  <div class="col-md">
                                    <label class="section-label-sm bold upper">Information</label>
                                    <i><p class="lead">Terima kasih anda telah melakukan pembayaran tiket lomba dan melakukan konfirmasi pembayaran tiket. Kini status pembayaran tiket anda sedang kami lakukan verifikasi. Mungkin membutuhkan waktu paling lambat 1x24 jam.</p></i>
                                  </div><!-- col -->
                                </div>
                                <!-- tunggu -->
                                <div class="pd-t-30">
                                    <div class="">
                                        <label class="section-label-sm bold upper">details verifikasi</label>
                                       <small><ul class="list-group">
                                            <li>Permintaan konfirmasi pembayaran anda sedang kami proses , hal ini di lakukan untuk pengecekan  bukti foto konfirmasi pembayaran  bagi setiap peserta.  agar tidak ada kecurangan ataupun kesalahan pada saat mengirimkan bukti foto konfirmasi pembayaran tiket.</li>
                                            <li>Konfirmasi pembayaran anda  akan kami proses biasanya membutuhkan waktu paling lambat 1x24 jam.</li>
                                            <li>Setelah admin menyetujui konfirmasi pembayaran tiket. Admin akan mengirimkan pemberitahuan melalui E - Mail Address yang telah anda daftarkan sebelumnya. </li>
                                            <li>Secara otomatis anda akan resmi menjadi peserta lomba <b class="tx-gray-800">BHHH2 Trail Run 2018  </b>berikut dengan nomor peserta dan sourvenir lainnya yang bisa anda ambil pada saat event berlangsung tepatnya di lokasi perlombaan <b class="tx-gray-800">Villa Istana Bunga  Lembang Bandung, Jawa - Barat.</b></li>
                                            <li>Peserta lomba tidak bisa membatalkan lomba jika sudah membayar tiket, karena biaya yang sudah anda transfer tidak bisa di kembalikan.</li>
                                            <li>Jika anda membutuhkan bantuan silahkan hubungi contact support kami yang sudah tersedia.</li>
                                        </ul> </small>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
 </main>
                     

@endsection
