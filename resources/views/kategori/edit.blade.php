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
          <div>
          	<form action="{{ route('kategori.update', ['id' => $data -> id]) }}" method="POST">
	          	{{ csrf_field() }}
	          	<div class="row">
	          		<div class="col-md-12">
	          			<input type="text" name="judul" class="uk-input" placeholder="Kategori lomba" value="{{ $data->judul }}" required autofocus>
	          		</div>
	          		
	          		<div class="col-md-12">
	          			<div class="pt-3">
	          				<textarea class="uk-textarea" rows="5" name="content" placeholder="Masukan keterangan kategori" required autofocus>{{ $data->content }}</textarea>
	          			</div>
	          			<div class="pt-3">
	          				<button class="btn bg-gradient text-white btn-lg btn-block">submit</button>
	          			</div>
	          		</div>
	          	</div>
          	</form>
          </div>
@endsection
