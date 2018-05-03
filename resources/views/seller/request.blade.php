@extends('seller.layouts')
@section('content')
      <section class="jumbotron text-center text-white">
        <div class="container">
          <span data-feather="bar-chart-2"></span><h1 class="jumbotron-heading">Request Peserta</h1>
          <p class="lead text-white">Halaman ini berfungsi untuk melihat dan memverifikasi calon peserta pendaftar lomba.</p>
          
        </div>
      </section>
          <div class="table-responsive">
            <table class="uk-table uk-table-divider border">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Preview</th>
                </tr>
              </thead>
              <tbody>
                @foreach($peserta as $data)
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->user->name}}</td>
                  <td>{{ $data->tiket->judul}}</td>
                  <td><a href="{{ route('admin.show', ['id' => $data -> id]) }}" class="uk-button uk-button-default uk-button-small">Request</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
@endsection