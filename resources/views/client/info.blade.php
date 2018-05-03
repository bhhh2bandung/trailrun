@extends('index')
@include('layouts.header')
@section('content')
    <!-- <main>
        <div class="uk-card-body">
            <div class="container pt-5">
                     <h1 class=" default text-center  title ">info lomba </h1>
            </div>
            </div>
    </main> -->
    <section class="bg-hero1 space-m">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12 col-md-6 col-lg-5 section-intro">
                            <h1 class="display-3 text-white title">Informasi perlombaan</h1>
                            <span class="lead text-white">
                                Perlombaan ini di selenggarakan oleh BHHH2 Bandung Jawa Barat Indonesia.
                            </span>
                        </div>
                        <!--end of col-->
                        <div class="col-12 col-md-6 col-lg-5">
                            
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
    <main class="uk-card-default">
        <div class="container content ">
        <div class="">
        <div class="uk-child-width-1-3@s  uk-grid-divider" uk-grid >
            <div>
            <div class="uk-card  ">
                <div class="uk-card-body text-center ">
                    <p class="lead title default">Jadwal </p>
                    <img src="{{ asset('img/icon/calendar.svg') }}" width="150" alt="">
                    <!-- <i class="uk-icon default" uk-icon="icon:calendar;ratio:7.3"></i> -->
                    <footer class="blockquote-footer  bold uk-margin-medium-top default">Perlombaan akan berlangsung pada hari Minggu, 12 Agustus 2018</footer>
                </div>
            </div>
            </div><div>
            <div class="uk-card  ">
                <div class="uk-card-body text-center ">
                    <p class="lead title default">Waktu </p>
                    <img src="{{ asset('img/icon/clock.svg') }}" width="150" alt="">
                    <!-- <i class="uk-icon default" uk-icon="icon:clock;ratio:7.3"></i> -->
                    <footer class="blockquote-footer  bold uk-margin-medium-top default">Perlombaan akan di laksanakan pada jam 06.00 AM sampai selesai.</footer>
                </div>
            </div>
            </div><div>
            <div class="uk-card  ">
                <div class="uk-card-body text-center ">
                    <p class="lead title default">Lokasi </p>
                    <!-- <i class="uk-icon default" uk-icon="icon:location;ratio:7.3"></i> -->
                    <img src="{{ asset('img/icon/location.svg') }}" width="150" alt="">

                    <footer class="blockquote-footer  bold uk-margin-medium-top default">Villa Istana Bunga Lembang Bandung Jawa Barat, Indonesia</footer>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </main>
    
    <!-- <hr> -->
   <main>
    
    <div class="container space-m">
        <div class="uk-child-width-1-2@m  uk-grid-small" uk-grid>
            <div >
                <h1 class=" default title upper ">Registrasi</h1>
                <p class="content">Peserta hanya bisa mendaftar 1 (satu) kategori lomba saja. Kategori lomba yang diselenggarakan adalah Half Marathon (25 Km) Open, Half Marathon (25 Km) Master, 15 Km Open dan 15 Km Master. Untuk kategori 25 Km peserta harus minimal berumur 17 tahun (kelahiran tahun 2001), 15 Km minimal berumur 15 tahun (kelahiran tahun 2003). Untuk kategori 25 Km Master dan 15 Km Master 45+ untuk peserta yang sudah berumur 45 tahun atau lebih pada 31 Desember 2017 atau peserta yang lahir di tahun 1977).</p>
            </div>
            <div class="uk-child-width-expand@m uk-grid-small" uk-grid>
                <div>
                        <div class="uk-card-body uk-card-default uk-card">
                    <div class="uk-card-badge uk-label default bg-warning "><b>Kategori</b></div>
                    <div class="text-center title default my-5">
                        <h4 class="display-3 default">25KM</h4>
                        <h4>IDR 400.000,-</h4>
                    </div>
                    
<a href="/register" class="btn bg-warning default btn-block" title="">Daftar Sekarang</a>
                </div>    
                </div>

                <div>
                <div class="uk-card-body uk-card-default uk-card">
                    <div class="uk-card-badge uk-label default bg-warning "><b>Kategori</b></div>
                    <div class="text-center title default my-5">
                        <h4 class="display-3 default">15KM</h4>
                        <h4>IDR 300.000,-</h4>
                        
                    </div>
                        
<a href="/register" class="btn btn-warning default btn-block" title="">Daftar Sekarang</a>
                </div>
                </div>
                
            </div>
           
            
        </div>
    </div>
</main> 
<!-- <hr> -->
<img src="{{ asset('img/bay.svg') }}" alt="" width="100%">
<div class="bg-smoke">
    <section>
        <div class="container space-m">
                <h1 class=" default title upper text-center ">Race Pack</h1>
                    <div class="row justify-content-center text-center section-intro mb-5">
                        <div class="col-12 col-md-9 col-lg-8">
                            <span class="lead"><i>* Racepack bisa di ambil oleh peserta sesuai jadwal yang sudah di tentukan.</i></span>
                            <br><a href="" class="default content"> <small><i><b> Syarat & ketentuan berlaku</b></i></small></a>

                        </div>
                        <!--end of col-->
                    </div>
                    <!--end of row-->

                    <div class="row justify-content-around">

                        <div class="col-md-5 col-7 mb-4">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="content-1" role="tabpanel" arialabelledby="content-1-tab">
                                    <!-- <img alt="Image" class="img-fluid w-100" src="http://wingman.mediumra.re/assets/img/graphic-desktop.svg"> -->
                                    <img alt="Image" class="img-fluid w-100" src="{{ asset('img/kaos.jpg') }}">
                                </div>
                                <div class="tab-pane fade" id="content-2" role="tabpanel" arialabelledby="content-2-tab">
                                    <!-- <img alt="Image" class="img-fluid w-100" src="http://wingman.mediumra.re/assets/img/graphic-fingerprint.svg"> -->
                                        <img alt="Image" class="img-fluid w-100" src="{{ asset('img/medali.jpg') }}">
                                    </div>
                                    <div class="tab-pane fade" id="content-3" role="tabpanel" arialabelledby="content-3-tab">
                                        <!-- <img alt="Image" class="img-fluid w-100" src="http://wingman.mediumra.re/assets/img/graphic-envelope.svg"> -->
                                        <img alt="Image" class="img-fluid w-100" src="{{ asset('img/medali.jpg') }}">
                                </div>
                            </div>
                        </div>
                        <!--end of col-->
                        <div class="col-lg-5 col-md-8 mb-4">
                            <ul class="nav content" role="tablist">
                                <li>
                                    <div class="card active" data-toggle="tab" href="#content-1" role="tab" aria-controls="content-1" aria-selected="true">
                                        <div class="uk-padding">
                                            <div class="media align-items-center">
                                                <div class="step-circle mr-4">1</div>
                                                <div class="media-body">
                                                    <h5>Kaos Lomba</h5>
                                                    <span class="blockquote-footer">
                                                        Peserta akan mendapatkan kaos perlombaan yang akan di pakai pada saat perlombaan berlangsung.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" data-toggle="tab" href="#content-2" role="tab" aria-controls="content-2" aria-selected="false">
                                        <div class="uk-padding">
                                            <div class="media align-items-center">
                                                <div class="step-circle mr-4">2</div>
                                                <div class="media-body">
                                                    <h5>Medali lomba</h5>
                                                    <span class="blockquote-footer">
                                                        Peserta akan mendapatkan jika medali jika sudah menyelasaikan perlombaan sampai di garis finisher.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" data-toggle="tab" href="#content-3" role="tab" aria-controls="content-3" aria-selected="false">
                                        <div class="uk-padding">
                                            <div class="media align-items-center">
                                                <div class="step-circle mr-4">3</div>
                                                <div class="media-body">
                                                    <h5> Water Station  </h5>
                                                    <span class="blockquote-footer">
                                                        Peserta yang hadir akan mendapatkan makanan serta minuman pada saat event berlangsung.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--end of col-->

                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <div class="container">    
                <hr class="hr1">
            </div>
            
            <section>
                <div class="container space-m content">
                    <h1 class=" default title upper text-center mb-5">Hadiah untuk pemenang</h1>
                    <div class="card-group mb-5">
                        <!-- <div class="card">
                            <img class="card-img-top" src="http://via.placeholder.com/400x300" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">Kategori 25K</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="http://via.placeholder.com/400x300" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">Kategori 25K</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="http://via.placeholder.com/400x300" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">Kategori 25K</small>
                            </div>
                        </div>
                        </div>

                        <div class="card-group ">
                        <div class="card">
                            <img class="card-img-top" src="http://via.placeholder.com/400x300" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">Kategori 15K</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="http://via.placeholder.com/400x300" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">Kategori 15K</small>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="http://via.placeholder.com/400x300" alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                            <small class="text-muted">Kategori 15K</small>
                            </div>
                        </div> -->
                        <img src="{{ asset('img/25k.jpg') }}" alt="">       
                        <img src="{{ asset('img/15k.jpg') }}" alt="">       
                        
                    </div>
                </div>
            </section>

<!--<hr>
     <main class="mb-5">
        <div class="uk-card-body" id="hadiah" >
        <h1 class=" default title upper text-center">Hadiah untuk pemenang</h1>
    </div>
    <div class="container">
            <img src="{{ asset('img/25k.jpg') }}" alt="">       
            <img src="{{ asset('img/15k.jpg') }}" alt="">       
    </div>
</main> -->
</div>
@stop