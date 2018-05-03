@extends('seller.layouts')
@section('content')
  <main>
        <div class="container">
            <div class="uk-card-body">
              <div class="col-md-6 offset-md-3">
                <div class="card card-body">
                  <div class="table-responsive">
                    <table class="table  table-sm">
                      <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $data->peserta->user->name }}</td>
                      </tr>
                      <tr>
                        <td>Invoice Tiket</td>
                        <td>:</td>
                        <td>Rp {{ format_uang($data->peserta->tiket->harga + $data->id) }},-</td>
                      </tr>
                      <tr>
                        <td>
                          <div uk-lightbox>
                            <a href="{{ $data->foto }}" title="" data-caption="{{ $data->peserta->user->name }}"><img src="{{ $data->foto }}" alt=""></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        <form action="{{ route('admin.store') }}" method="POST">
                          {{ csrf_field() }}
                          <input type="hidden" name="upload_id" value="{{ $data->id }}">
                          <input type="hidden" name="status" value="active">
                          @if(empty($ab))
                          <button type="submit" class="btn btn-outline-dark btn-sm">Verifikasi</button>
                          @else
                          sudah di verifikasi
                          @endif
                        </form>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>

            </div>
            </div>
        </div>
    </main>
@stop