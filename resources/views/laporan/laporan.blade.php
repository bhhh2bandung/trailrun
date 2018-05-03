@extends('seller.layouts')
@section('content')
  <section class="jumbotron text-center text-white">
    <div class="container">
      <span data-feather="bar-chart-2"></span><h1 class="jumbotron-heading">Laporan Pdf</h1>
      <p class="lead text-white">Halaman untuk download hasil peserta via pdf file.</p>
    </div>
  </section>
  <div class="uk-child-width-1-3@m" uk-grid>
  	<div>
  		<a href="{{ route('laporan.all') }}" title="" class="btn btn-xs btn-outline-dark btn-block"><i data-feather="download"></i> All Peserta</a>
  	</div>
  	<div>
  		<a href="#" title="" class="btn btn-xs btn-outline-dark btn-block"><i data-feather="download"></i> Male Peserta</a>
  	</div>
  	<div>
  		<a href="#" title="" class="btn btn-xs btn-outline-dark btn-block"><i data-feather="download"></i> Female Peserta</a>
  	</div>

  </div>
@endsection