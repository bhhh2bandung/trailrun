@extends('index')
@include('layouts.header')
@section('content')
  <main>
            <div class="bg-reg">
                        <div class="pt-5 pb-5">
                            <div class="container ">
                                <div class=" bg-default">
                                    <img src="{{ asset('img/bg-reg3.png') }}" alt="">
                                </div>
                                <!-- account -->
                                <div class="uk-card-body uk-card-default">
                                    <div class="uk-grid-small uk-child-width-expand@s upper default bold" uk-grid>
                                            <div>
                                                <div class="">
                                                    <p class="uk-margin-remove">Nama : {{ Auth::user()->name }}</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="">
                                                    <p class="uk-margin-remove">Kategori lomba : {{ $data->peserta->tiket->judul}}</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="">
                                                    <p class="uk-margin-remove">Status  :  <b class="bg-warning default btn-sm">menunggu konfirmasi admin</b></p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                

                                <a class="uk-button bg-default text-white btn-block" href="" title="" data-toggle="modal" data-target="#exampleModalLong">lihat detail akun anda</a>
                                
                                <!-- tunggu -->
                                <div class="pt-3">
                                    <div class="uk-card-body uk-card uk-card-default black content">
                                        <p class="default bold upper">Menunggu konfirmasi admin</p>
                                       <ul class="list-group">
                                            <li>Permintaan konfirmasi pembayaran anda sedang kami proses , hal ini di lakukan untuk pengecekan  bukti foto konfirmasi pembayaran  bagi setiap peserta.  agar tidak ada kecurangan ataupun kesalahan pada saat mengirimkan bukti foto konfirmasi pembayaran tiket.</li>
                                            <li>Konfirmasi pembayaran anda  akan kami proses biasanya membutuhkan waktu paling lambat 1-3 hari.</li>
                                            <li>Setelah admin menyetujui konfirmasi pembayaran tiket. Admin akan mengirimkan pemberitahuan melalui E - Mail Address yang telah anda daftarkan sebelumnya. </li>
                                            <li>Secara otomatis anda akan resmi menjadi peserta lomba <b class="default">BHHH2 Trail Run 2018  </b>berikut dengan nomor peserta dan sourvenir lainnya yang bisa anda ambil pada saat event berlangsung tepatnya di lokasi perlombaan <b class="default">Villa Istana Bunga  Lembang Bandung, Jawa - Barat.</b></li>
                                            <li>Peserta lomba tidak bisa membatalkan lomba jika sudah membayar tiket, karena biaya yang sudah anda transfer tidak bisa di kembalikan.</li>
                                            <li>Jika anda membutuhkan bantuan silahkan hubungi contact support kami yang sudah tersedia.</li>
                                        </ul> 

                                    </div>
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
            <td>{{ $data->peserta->kelamin }}</td>
        </tr>
        <tr>
            <td class="default bold">Komunitas</td>
            <td>:</td>
            <td>{{ $data->peserta->komunitas }}</td>
        </tr>
        <tr>
            <td class="default bold">Kategori lomba</td>
            <td>:</td>
            <td>{{ $data->peserta->tiket->judul}}</td>
        </tr>
        <tr>
            <td class="default bold">Ukuran Kaos</td>
            <td>:</td>
            <td>{{ $data->peserta->kaos }}</td>
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
    </main> 
      

@endsection
