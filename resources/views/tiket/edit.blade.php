@extends('seller.layouts')
@section('content')
	<section class="jumbotron text-center">
        <div class="container">
          <span data-feather="bar-chart-2"></span><h1 class="jumbotron-heading">Tiket Lomba</h1>
          <p class="lead text-muted">Halaman ini berfungsi untuk melihat tiket serta menambahkan juga bisa untuk mengedit dan menghapus tiket perlombaan.</p>
          <p>
            <a href="{{ route('tiket') }}" class="btn btn-primary my-2">Lihat Tiket</a>
            <a href="{{ route('tiket.create') }}" class="btn btn-secondary my-2">Tambah Tiket</a>
          </p>
        </div>
      </section>
          <div>
          	<form action="{{ route('tiket.update', ['id' => $data -> id]) }}" method="POST">
	          	{{ csrf_field() }}
	          	<div class="row">
	          		<div class="col-md-6">
	          			<input type="text" name="judul" class="form-control" placeholder="Tiket lomba" value="{{ $data->judul }}">
	          		</div>
	          		<div class="col-md-6">
	          			<input type="text" name="harga" class="form-control" placeholder="Harga tiket" value="{{ $data->harga }}">
	          		</div>
	          		<div class="col-md-12">
	          			<div class="pt-3">
	          				<textarea class="form-control" name="content" placeholder="Masukan keterangan tiket">{{ $data->content }}</textarea>
	          			</div>
	          			<div class="pt-3">
	          				<button class="btn btn-primary btn-lg btn-block">submit</button>
	          			</div>
	          		</div>
	          	</div>
          	</form>
          </div>
@endsection