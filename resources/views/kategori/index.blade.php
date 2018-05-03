@extends('seller.layouts')
@section('content')
	<section class="jumbotron text-center text-white">
        <div class="container">
          <span data-feather="bar-chart-2"></span><h1 class="jumbotron-heading">Kategori Lomba</h1>
          <p class="lead text-white">Halaman ini berfungsi untuk melihat kategori serta menambahkan juga bisa untuk mengedit dan menghapus kategori perlombaan.</p>
          <p>
            <a href="{{ route('kategori') }}" class="btn btn-outline-light my-2">Lihat Kategori</a>
            <a href="{{ route('kategori.create') }}" class="btn btn-outline-light my-2">Tambah Kategori</a>
          </p>
        </div>
      </section>

          <div class="row">
          	@foreach($kategori as $data)
          	<div class="col-md-4">
          		<div class="card mb-4 box-shadow">
		          <div class="card-body text-center">
		            <div class="my-5">
			            <h1 class="jumbotron-heading">{{ $data->judul }}</h1>
			            <p class="lead"> {{ $data->content }}</p>
		            </div>
		            <a href="{{ route('kategori.edit', ['id' => $data -> id]) }}" class="btn btn-lg btn-block bg-gradient text-white">Get Edit</a>
		          </div>
		        </div>	
          	</div>
          	@endforeach
          </div>
@endsection