@extends('index')
@include('layouts.header')
@section('content')
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
                    <p class="lead title default">Jadwal lomba </p>
                    <img src="{{ asset('img/icon/calendar.svg') }}" width="150" alt="">
                    <!-- <i class="uk-icon default" uk-icon="icon:calendar;ratio:7.3"></i> -->
                    <footer class="blockquote-footer   uk-margin-medium-top default">Perlombaan akan berlangsung pada hari Minggu, 12 Agustus 2018</footer>
                </div>
            </div>
            </div><div>
            <div class="uk-card  ">
                <div class="uk-card-body text-center ">
                    <p class="lead title default">Waktu lomba </p>
                    <img src="{{ asset('img/icon/clock.svg') }}" width="150" alt="">
                    <!-- <i class="uk-icon default" uk-icon="icon:clock;ratio:7.3"></i> -->
                    <footer class="blockquote-footer   uk-margin-medium-top default">Perlombaan akan di laksanakan pada jam 06.00 AM sampai selesai.</footer>
                </div>
            </div>
            </div><div>
            <div class="uk-card  ">
                <div class="uk-card-body text-center ">
                    <p class="lead title default">Lokasi lomba </p>
                    <!-- <i class="uk-icon default" uk-icon="icon:location;ratio:7.3"></i> -->
                    <img src="{{ asset('img/icon/location.svg') }}" width="150" alt="">

                    <footer class="blockquote-footer   uk-margin-medium-top default">Villa Istana Bunga Lembang Bandung Jawa Barat, Indonesia</footer>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </main>
    <section>
        <div class="space-m">
            <div class="container">
                <h1 class="title default">racepack lomba</h1>
                <div class="card-group">
                  <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/600x400" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title title default">Kaos lomba</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                      <a href="" title="" data-toggle="modal" data-target="#modaldemo4"><small class="text-muted">Lihat gambar <i class="ion-ios-plus-outline"></i></small></a>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/600x400" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title title default">medali lomba</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                      <a href="" title="" data-toggle="modal" data-target="#modaldemo4"><small class="text-muted">Lihat gambar <i class="ion-ios-plus-outline"></i></small></a>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/600x400" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title title default">water refreshment</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                      <a href="" title="" data-toggle="modal" data-target="#modaldemo4"><small class="text-muted">Lihat gambar <i class="ion-ios-plus-outline"></i></small></a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="space-m bg-smoke">
            <div class="container">
                <h1 class="title default">Route location</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="row">
                  <div class="col-md-6">
                    <a href="" class="btn btn-lg bg-default text-white  btn-block mg-b-10" data-toggle="modal" data-target="#modaldemo3"><i class="fa fa-camera "></i> Lihat Route Maps</a>
                  </div>
                  <div class="col-md-6">
                    <a href="{{ route('maps.download') }}" class="btn btn-lg bg-default text-white  btn-block mg-b-10 bd bd-1"><i class="fa fa-download "></i> Download Maps</a>
                  </div>
                </div>
            </div>
        </div>
    </section>

<!-- Modal kaos -->
<section>
  <div id="modaldemo4" class="modal fade" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <h4 class="tx-success tx-semibold mg-b-20">Kaos Perlombaan</h4>
            <img src="https://www.compressport.com/wp-content/uploads/2015/05/trail-shirt-onglet.png" class="wd-200" alt="">
            <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
            <button type="button" class="btn btn-success pd-x-25" data-dismiss="modal" aria-label="Close">Continue</button>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div>
</section>
<!-- Modal map -->
<div id="modaldemo3" class="modal fade" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Route Maps location</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="">
            <img src="{{ asset('img/maps.jpg') }}" width="100%" alt="">
          </div><!-- modal-body -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div>
@stop