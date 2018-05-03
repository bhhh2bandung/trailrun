@extends('seller.layouts')
@section('content')
      <section class="jumbotron text-center text-white">
        <div class="container">
          <span data-feather="bar-chart-2"></span><h1 class="jumbotron-heading">Details Peserta</h1>
          <p class="lead text-white">Halaman untuk melihat details peserta lomba yang aktif.</p>
          
        </div>
      </section>
          <div class="table-responsive">
            <table class="uk-table uk-table-divider border">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Status</th>
                  <th>Details</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $data)
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->upload->peserta->user->name }}</td>
                  <td>{{ $data->upload->peserta->tiket->judul }}</td>
                  <td>{{ $data->status }}</td>
                  <td><button type="button" class="uk-button uk-button-small" data-toggle="modal" data-target="#exampleModalLong">Details</button></td>
                  <td><a href="{{ route('admin.delete', ['id' => $data -> id]) }}" class="uk-button uk-button-default uk-button-small">Hapus</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Details Peserta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-striped table-sm">
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->user->name }}</td>
        </tr>
        <tr>
          <td>No.Peserta</td>
          <td>:</td>
          <td>280{{ $data->id }}</td>
        </tr>
        <tr>
          <td>E-Mail</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->user->email }}</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->kelamin->judul }}</td>
        </tr>
        <tr>
          <td>No.KTP</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->ktp }}</td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->tgl }}</td>
        </tr>
        <tr>
          <td>Kategori Lomba</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->tiket->judul }}</td>
        </tr>
        <tr>
          <td>Ukuran Baju</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->kaos }}</td>
        </tr>
        <tr>
          <td>Gol.Darah</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->darah }}</td>
        </tr>
        <tr>
          <td>Komunitas</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->komunitas }}</td>
        </tr>
        <tr>
          <td>No.HP</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->telepon }}</td>
        </tr>
        <tr>
          <td>No.HP Darurat</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->telepon1 }}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td>{{ $data->upload->peserta->alamat }}</td>
        </tr>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
