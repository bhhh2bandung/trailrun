@extends('index')
@include('layouts.header')
@section('content')
<main>
<div class="space-m">
	<div class="container ">
	   <!-- Badge information -->
        <ul class="nav nav-activity-profile ">
          <li class="nav-item card bg-default upper mr-2"><a href="" class="nav-link text-white"><i class="icon uk-inline fa fa-user-circle fa-3x"></i> isi formulir</a></li>
          <li class="nav-item card bg-default upper mr-2 uk-visible@m"><a href="" class="nav-link text-white"><i class="icon uk-inline fa fa-credit-card fa-3x"></i> pembayran tiket</a></li>
          <li class="nav-item card upper mr-2 uk-visible@m"><a href="" class="nav-link default"><i class="icon uk-inline ion-document-text uk-visible@m"></i> verifikasi</a></li>
          <li class="nav-item card upper uk-visible@m"><a href="" class="nav-link default"><i class="icon uk-inline fa fa-check-circle-o fa-3x "></i> selesai</a></li>
        </ul>
        <!-- Keterangan -->
        <i><small><p>Untuk mengikuti event bhhh2 trial run 2018 peserta di wajibkan untuk melengkapi data pada formulir di bawah ini. <br> Pastikan anda memasukan data dengan benar adanya, karena data yang sudah di masukan tidak isa di update kembali.</p></small></i>

        <div class="row space-m">
          <div class="col-md-6">
            <label class="section-label-sm bold upper">Account</label>
            <div class="billed-to">
              <h6 class="tx-gray-800 capt">{{ Auth::user()->name }}</h6>
              <p>Ukuran Kaos : {{ $data->kaos }}<br>
              Tel No: {{ $data->telepon }}<br>
              Email: {{ $data->user->email }} <br>
              <span class="">Status  :  <b class="bg-purple text-white  btn-sm">menunggu pembayaran tiket</b></span>
            </p>
            </div>
          </div><!-- col -->
          <div class="col-md-6">
            <label class="section-label-sm bold upper">Invoice Information</label>
            <p class="invoice-info-row">
              <span>Kategori Tiket</span>
              <span>{{ $data->tiket->judul }}</span>
            </p>
            <p class="invoice-info-row">
              <span>Harga Tiket</span>
              <span>Rp {{ format_uang($data->tiket->harga) }},-</span>
            </p>
            <p class="invoice-info-row">
              <span>Kode Unik</span>
              <span>{{ $data->id }}</span>
            </p>
            <p class="invoice-info-row">
              <span class="tx-gray-800 bold">Total Pembayaran</span>
              <span class="tx-gray-800 bold">Rp {{ format_uang($data->tiket->harga +  $data->id) }},-</span>
            </p>
          </div><!-- col -->
        </div>
  		<!-- account -->
  		<!-- carapembayaran -->
  		<div class="row">
      		<div class="col-md-6">
      			<label class="section-label-sm bold upper">Cara pembayaran tiket lomba</label>
      			<ol class="list-group">
					<li>Untuk mendapatkan nomor peserta lomba, Kaos dan Souvenir lainnya. <span class="tx-gray-800 bold"> Peserta diwajibkan  transfer sesuai dengan jumlah transfer di atas (untuk memudahkan verifikasi pembayaran) ke rekening : </span>
					 <b class="tx-gray-800"><br>Bank BCA <br>No. Rek. 4490261112 <br>A/N. Irmanto Tedja DRS</b></li>
					<li>Metode pembayaran tiket yang tersedia hanya bank transfer saja.</li>
					<li>Jika ada kendala dalam melakukan pembayaran tiket silahkan hubungi kontak support kami yang sudah tersedia.</li>
				</ol>
      		</div>
      		<div class="col-md-6">
      			<label class="section-label-sm bold upper">Konfirmasi pembayaran</label>
      			<ol class="list-group">
      						<li>Setelah malakukan pembayaran tiket lomba peserta di wajibkan untuk melakukan konfirmasi pembayaran.</li>
     		 				<li>Silahkan kirim <b class="tx-gray-800">foto bukti pembayaran </b>di bawah ini : <br><form class="pt-2" action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="custom-file ">
								  <input type="hidden" name="peserta_id" value="{{ $data->id }}">
								  <input type="file" class="form-control "  name="foto" placeholder="tongkol">
								</div>
									  <button class="btn btn-success btn-block mt-4" type="submit">Submit</button>
								</form>
							</li>
		 				</ol>
      		</div>
  		</div>

  	</div>
  </div>
</main>

	
@stop