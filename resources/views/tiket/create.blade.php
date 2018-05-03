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
          <div>
          	<form action="{{ route('tiket.store') }}" method="POST">
	          	{{ csrf_field() }}
	          	<div class="row">
	          		<div class="col-md-6">
	          			<input type="text" name="judul" class="uk-input" placeholder="Tiket lomba" required autofocus>
	          		</div>
	          		<div class="col-md-6">
	          			<input type="text" name="harga" class="uk-input"  placeholder="Harga tiket" required autofocus>
	          		</div>
	          		<div class="col-md-12">
	          			<div class="pt-3">
	          				<textarea class="uk-textarea" rows="5" name="content" placeholder="Masukan keterangan tiket" required autofocus></textarea>
	          			</div>
	          			<div class="pt-3">
	          				<button class="btn bg-gradient text-white btn-lg btn-block">submit</button>
	          			</div>
	          		</div>
	          	</div>
          	</form>
          </div>
@endsection
