@extends('index')
@include('layouts.header')
@section('content')
<main>
            <div class="bg-reg">
                        <div class="pt-5 pb-5">
                        	<div class="container ">
                        		<div class=" bg-default">
                          			<img src="{{ asset('img/bg-reg2.png') }}" class="uk-visible@m" alt="">
                          			<div class="uk-card-body text-center text-white bold uk-hidden@m">
			                                <p class="uk-margin-remove upper"> konfirmasi pembayaran</p>
			                                <small>silahkan lakukan pembayaran tiket sesuai kategori lomba yang anda pilih</small>
			                              </div>
                          		</div>
                          		<!-- account -->
                          		<div class="uk-card-body uk-card-default uk-visible@m">
                          			<div class="uk-grid-small uk-child-width-expand@s upper default bold" uk-grid>
				    <div>
				        <div class="">
				        	<p class="uk-margin-remove">Nama : {{ Auth::user()->name }}</p>
				        </div>
				    </div>
				    <div>
				        <div class="">
				        	<p class="uk-margin-remove">Jumlah Transfer  : <span class="text-danger"> Rp {{ format_uang($data->tiket->harga +  $data->id) }},- </span></p>
				        </div>
				    </div>
				    <div>
				        <div class="">
				        	<p class="uk-margin-remove">Status  :  <b class="bg-danger text-white  btn-sm">menunggu pembayaran tiket</b></p>
				        </div>
				    </div>
				</div>
                          		</div>
                          		<div class="uk-card-default upper default uk-hidden@m">
                          			<div class="uk-padding-small">
	                          			<ul class="uk-list">
	                          				<li>Nama : {{ Auth::user()->name }}</li>
	                          				<li>Jumlah Transfer : <b> Rp {{ format_uang($data->tiket->harga +  $data->id) }},- </b></li>
	                          				<li>Status  :   <b class="bg-danger text-white btn-sm"><small>menunggu pembayaran tiket</small></b></small></li>
	                          			</ul>
                          			</div>
                          		</div>
                          		<!-- carapembayaran -->
                          		<div class="pt-3">
                          			<div class="uk-card uk-card-body uk-card-default black content">
                          				<div class="uk-child-width-1-2@s uk-grid-divider" uk-grid>
	                          				<div >
		                          				<p class="default bold upper">Cara pembayaran tiket lomba</p>
		                          				
	                         		 				<ul class="list-group">
							<li>Untuk mendapatkan nomor peserta lomba, Kaos dan Souvenir lainnya. <span class="text-danger"> Peserta diwajibkan  transfer sesuai dengan jumlah transfer di atas (untuk memudahkan verifikasi pembayaran) </span> ke :
							 <b class="default"><br>Bank BCA <br>No. Rek. 4490261112 <br>A/N. Irmanto Tedja DRS</b>
							 </li>
							<li>Metode pembayaran tiket yang tersedia hanya bank transfer saja.</li>
							
							
						</ul>
	                         		 			
	                          				</div>
	                          				<div >
		                          				<p class="default bold upper">Cara konfirmasi pembayaran tiket lomba</p>
		                          				
	                         		 				<ul class="list-group">
	                         		 					<li>Silahkan kirim <b class="default">foto bukti pembayaran </b>di bawah ini : <br>
	                         		 									<form class="pt-2" action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="custom-file ">
						  <input type="hidden" name="peserta_id" value="{{ $data->id }}">
						  <input type="file" class="form-control "  name="foto" placeholder="tongkol">
						</div>
							  <button class="uk-button btn-warning uk-margin btn-block default" type="submit">Kirim</button>
						</form>
	                         		 					</li>
									
														  <li>Jika ada kendala dalam melakukan pembayaran tiket dan konfirmasi, silahkan hubungi kami.</li>
									<li>
										syarat & ketentuan perlombaan berlaku.
									</li>
	                         		 				</ul>
	                         		 				
		                          				
	                          				</div>
                          				</div>

                          			</div>
                          		</div>
                          		

                          	</div>
                          </div>
                  </div>
</main>

	
@stop