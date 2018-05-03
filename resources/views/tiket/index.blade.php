@extends('seller.layouts')
@section('content')
	<section class="jumbotron text-center text-white">
        <div class="container">
          <span data-feather="bar-chart-2"></span><h1 class="jumbotron-heading">Tiket Lomba</h1>
          <p class="lead text-white">Halaman ini berfungsi untuk melihat tiket serta menambahkan juga bisa untuk mengedit dan menghapus tiket perlombaan.</p>
          <p>
            <a href="{{ route('tiket') }}" class="btn btn-outline-light my-2">Lihat Tiket</a>
            <a href="{{ route('tiket.create') }}" class="btn btn-outline-light my-2">Tambah Tiket</a>
          </p>
        </div>
      </section>

          <div class="row">
          	@foreach($tiket as $data)
          	<div class="col-md-4">
          		<div class="card mb-4 box-shadow">
		          <div class="card-body text-center">
		            <div class="my-5">
			            <h1 class="jumbotron-heading">{{ $data->judul }}</h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li class="lead">Rp.{{ format_uang($data->harga) }}</li>
                  </ul>
			            <!-- <hr> -->
			            <p class="lead"> {{ $data->content }}</p>
		            </div>
		            <a href="{{ route('tiket.edit', ['id' => $data -> id]) }}" class="btn btn-lg btn-block bg-gradient text-white">Get Edit</a>
		          </div>
		        </div>	
          	</div>
          	@endforeach
          </div>
@endsection