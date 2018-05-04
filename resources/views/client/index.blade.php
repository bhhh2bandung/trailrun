@extends('index') 
@section('content')
<div class="bg-default is"></div>
	<div class="uk-position-relative">
		  <div class="bg-hero" >
		      <div class="bg-pat uk-position-cover"></div>
					<div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">
						<nav class="uk-navbar-container">
				            <div class="container">
				                <div uk-navbar>
									<div class="uk-navbar-left">
											<a href="/" class="uk-navbar-item uk-logo mt-2 mb-2"><img src="{{ asset('img/logoa.png')}}" width="100" alt=""></a></div>
												 <div class="uk-navbar-right">
													<ul class="uk-navbar-nav uk-visible@m">
													<li><a href="/">home</a></li>
													<li><a href="/register">pendaftaran</a></li>
													<li><a href="/details">info lomba</a></li>
													<li><a href="/peserta">peserta lomba</a></li>
													<li><a href="/syarat">peraturan</a></li>
													<li><a href="/gallery">gallery</a></li>
													<li><a href="#">result</a></li>
													<li><a href="/contact">kontak</a></li>
													@if (Auth::guest())
													<li><a href="/login">login <i class="material-icons uk-margin-small-left">launch</i></a></li>
													@else
													<li><a href="/home" title="" class="white">Profil</a></li>
																<li>
																<a href="/logout" class=" white" onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();">LOGOUT <i class="material-icons uk-margin-small-left">power_settings_new</i></a>
																		<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
																@endif</li>
											</ul>
											<div class="uk-hidden@m">
											<a href="#" class="text-white"> <i class="material-icons uk-margin-small-left" uk-toggle="target: #menu">reorder</i></a>
											<div id="menu" uk-offcanvas="flip: true; overlay: true;">
												<div class="uk-offcanvas-bar bg-default">
												<button class="uk-offcanvas-close" type="button" uk-close></button>
												<div class="uk-card-body">
													<ul class="uk-list uk-list-divider upper bold mobile">
														<li><a href="/" title="" class="white">home</a></li>
														<li><a href="/register" title="" class="white">pendaftaran</a></li>
														<li><a href="/details" title="" class="white">info lomba</a></li>
														<li><a href="/peserta" title="" class="white">peserta lomba</a></li>
														<li><a href="/syarat" title="" class="white">peraturan</a></li>
														<li><a href="/contact" title="" class="white">contact</a></li>
														@if (Auth::guest())
														<li> 
																<a class="white   " href="/login">Login <i class="material-icons uk-margin-small-left">launch</i></a>
																</li>
																@else
																<li>
																	
																<a href="/home" title="" class="white uk-margin-small-right">Profil</a>
																</li>
																<li>
																<a href="/logout" class=" white" onclick="event.preventDefault();
																		document.getElementById('logout-form').submit();">LOGOUT  <i class="material-icons uk-margin-small-left">power_settings_new</i></a>
																		<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
																
																@endif
																</li>
															
													</ul>
												</div>
												</div>
												</div>

											</div>
								 </div>

                </div>
            </div>
        </nav>
				</div>
		    <div class="uk-position-center  uk-text-center text-white ">
				<div class="uk-visible@m">
		    	<h1 class="title text-white display-3 uk-visible@m">BHHH2 TRAIL RUN 2018</h1>
		    	<div class="uk-child-width-auto mt-4 title" uk-grid uk-countdown="date:2018-08-12T06:00:19+00:00">
			    <div>
			        <div class="uk-countdown-number uk-countdown-days"></div>
			        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Days</div>
			    </div>
			    <div class="uk-countdown-separator">:</div>
			    <div>
			        <div class="uk-countdown-number uk-countdown-hours"></div>
			        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hours</div>
			    </div>
			    <div class="uk-countdown-separator">:</div>
			    <div>
			        <div class="uk-countdown-number uk-countdown-minutes"></div>
			        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
			    </div>
			    <div class="uk-countdown-separator">:</div>
			    <div>
			        <div class="uk-countdown-number uk-countdown-seconds"></div>
			        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Seconds</div>
			    </div>
			</div>
				<div class="pt-4">
					<small><p class="lead"><i class="uk-icon" uk-icon="icon:location"></i>Lokasi lomba : Villa Istana Bunga lembang Bandung Jawa Barat Indonesia.</p></small>
				</div>
				<div class="pt-4">
					<a href="" class="uk-button btn-warning " title="">Daftar sekarang</a>
					<a href="" class="uk-button bg-default border" title="">Info Lomba</a>
				</div>
		    </div>
		</div>
		<div class="uk-hidden@m uk-position-center">
			<h4 class="text-white title">BHHH2 TRAIL RUN 2018</h4>
			<a href="/register" class="uk-button text-white btn-warning default btn-block mb-2" title="">Daftar Sekarang</a>
			<small><p class="text-white"><i class="uk-icon" uk-icon="icon:gitter"></i> <b>Villa Istana Bunga lembang <br> Bandung Jawa Barat Indonesia.</b></p></small>
		</div>
	</div>
</div>
<section>
	<div class="space-m">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="owl-carousel owl-theme">
					    <div class="item"><img src="{{ asset('img/slide1.jpg') }}" alt=""></div>
					    <div class="item"><img src="{{ asset('img/slide2.jpg') }}" alt=""></div>
					    <div class="item"><img src="{{ asset('img/slide3.jpg') }}" alt=""></div>
					    <div class="item"><img src="{{ asset('img/slide4.jpg') }}" alt=""></div>
					</div>
				</div>
				<div class="col-md-6">
					<h1 class="title default">about bhhh2 trail run 2018</h1>
					<small><p>BHHH2 Trail Run merupakan agenda lomba rutin yang diselenggarakan setiap tahun & kali ini merupakan seri ke-2. Tujuan diadakan lomba ini tidak lain untuk ikut memeriahkan kegiatan lomba lari di Indonesia & sekaligus memberikan support kepada para runners dalam hal menguji kemampuan diri sendiri & antar sesama runners. Selain itu dengan bangga kami pun ingin memperkenalkan Kawasan wisata alam terbuka yang dimiliki oleh Kota Bandung, kami sangat berharap generasi muda yang akan datang dapat menjaga & melestarikan alam ini demi masa depan kota tercinta ini. <br><br>Kegiatan ini diselenggarakan oleh BHHH2 (Bandung Hash House Harriers 2) yang merupakan klub lari lintas alam yang lahir di tahun 1984 di Kota Bandung. Kami memilih lokasi VIB (Villa Istana Bunga) sebagai lokasi yang sangat cocok untuk dipakai untuk kegiatan ini. Kondisi geografis yang sangat asri akan, sejuk, & pemandangan yang indah diharapkan bisa mengobati rasa Lelah runners ketika berlari. </p></small>
				</div>
			</div>
		</div>
	</div>
</section>
<main>
			<div class="space-m bg-default">
			<div class="container ">
				<div class="uk-child-width-1-2@m uk-grid-small uk-grid" uk-grid="">
					 <div class="uk-first-column">
							 <h1 class=" text-white title">Registrasi pelombaan.</h1>
								<small><p class="text-white">Peserta hanya bisa mendaftar 1 (satu) kategori lomba saja. Kategori lomba yang diselenggarakan adalah Half Marathon (25 Km) Open, Half Marathon (25 Km) Master, 15 Km Open dan 15 Km Master. Untuk kategori 25 Km peserta harus minimal berumur 17 tahun (kelahiran tahun 2001), 15 Km minimal berumur 15 tahun (kelahiran tahun 2003). Untuk kategori 25 Km Master dan 15 Km Master 45+ untuk peserta yang sudah berumur 45 tahun atau lebih pada 31 Desember 2017 atau peserta yang lahir di tahun 1977).</p></small>
							</div>
					 <div class="uk-child-width-expand@m uk-grid-small uk-grid" uk-grid="">
						 <div class="uk-first-column">
							<div class="uk-card-body card uk-card">
								<div class="uk-card-badge uk-label default bg-warning bold">Kategori</div>
								 <div class="text-center my-5">
										 <h4 class="display-3 title default">25KM</h4>
										 <h4 class=" default "><b>IDR 400.000,- </b></h4>
								 </div>
								<a href="/register" class="btn default btn-warning btn-block" title="">Daftar Sekarang</a>
						 </div>
					 </div>
					 <div>
							<div class="uk-card-body card uk-card">
								<div class="uk-card-badge uk-label default bg-warning bold">Kategori</div>
								 <div class="text-center my-5">
										 <h4 class="display-3 title default">15KM</h4>
										 <h4 class=" default "><b>IDR 300.000,- </b></h4>
								 </div>
								<a href="/register" class="btn default btn-warning btn-block" title="">Daftar Sekarang <i class="fas fa-camera-retro"></i></a>
						 </div>
					 	</div>
					 </div>
				 </div>
			 </div>
			 </div>
			
		</main>
<section>
                <div class="container space-m ">
                    <h1 class=" default title upper text-center mb-5">Hadiah untuk pemenang</h1>
                    
                    <div class="card-group mb-5">
                        <div class="card text-center">
                            <img class="card-img-top" src="{{ asset('img/is.png') }}" alt="Card image cap">
                            <h3 class=" display-4 title default">Juara 1</h3>
                            <p class="bold default">Kategori 25KM</p>
                            <div class="card-body">
                                <hr>
                            <p class="card-text bold default">Rp 3.000.000 + Medali Emas</p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <img class="card-img-top" src="{{ asset('img/is.png') }}" alt="Card image cap">
                            <h3 class=" display-4 title default">Juara 2</h3>
                            <p class="bold default">Kategori 25KM</p>
                            <div class="card-body">
                                <hr>
                            <p class="card-text bold default">Rp 2.500.000 + Medali Perak</p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <img class="card-img-top" src="{{ asset('img/is.png') }}" alt="Card image cap">
                            <h3 class=" display-4 title default">Juara 3</h3>
                            <p class="bold default">Kategori 25KM</p>
                            <div class="card-body">
                                <hr>
                            <p class="card-text bold default">Rp 2.000.000 + Medali Perunggu</p>
                            </div>
                        </div>
                        </div>
                    <div class="card-group mb-5">
                        <div class="card text-center">
                            <img class="card-img-top" src="{{ asset('img/is.png') }}" alt="Card image cap">
                            <h3 class=" display-4 title default">Juara 1</h3>
                            <p class="bold default">Kategori 15KM</p>
                            <div class="card-body">
                                <hr>
                            <p class="card-text bold default">Rp 2.000.000 + Medali Emas</p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <img class="card-img-top" src="{{ asset('img/is.png') }}" alt="Card image cap">
                            <h3 class=" display-4 title default">Juara 2</h3>
                            <p class="bold default">Kategori 15KM</p>
                            <div class="card-body">
                                <hr>
                            <p class="card-text bold default">Rp 1.500.000 + Medali Perak</p>
                            </div>
                        </div>
                        <div class="card text-center">
                            <img class="card-img-top" src="{{ asset('img/is.png') }}" alt="Card image cap">
                            <h3 class=" display-4 title default">Juara 3</h3>
                            <p class="bold default">Kategori 15KM</p>
                            <div class="card-body">
                                <hr>
                            <p class="card-text bold default">Rp 1.000.000 + Medali Perunggu</p>
                            </div>
                        </div>
                        </div>

                        



                        </div>
            </section>
<section>
		<div class="space-m bg-smoke">
		<div class="container">
			<h1 class="title default mb-20">Sponsorship</h1>
			<div class="row">
				<div class="col-md-4">
					<img src="{{ asset('img/spon1.jpg') }}" width="100%" alt="">
				</div><div class="col-md-4">
					<img src="{{ asset('img/spon2.jpg') }}" width="100%" alt="">
				</div><div class="col-md-4">
					<img src="{{ asset('img/spon3.jpg') }}" width="100%" alt="">
				</div>

			</div>
		</div>
		</div>
	</section>
@stop