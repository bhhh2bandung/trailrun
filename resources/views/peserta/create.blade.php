@extends('index')
@include('layouts.header')
@section('content')
        <main>
            <div class="">
                        <div class="space-m">
                        <div class="container ">

                          <!-- Badge information -->
                          <ul class="nav nav-activity-profile ">
                            <li class="nav-item card bg-default upper mr-2"><a href="" class="nav-link text-white"><i class="icon uk-inline fa fa-user-circle fa-3x"></i> isi formulir</a></li>
                            <li class="nav-item card upper mr-2 uk-visible@m"><a href="" class="nav-link default"><i class="icon uk-inline fa fa-credit-card fa-3x"></i> pembayran tiket</a></li>
                            <li class="nav-item card upper mr-2 uk-visible@m"><a href="" class="nav-link default"><i class="icon uk-inline ion-document-text uk-visible@m"></i> verifikasi</a></li>
                            <li class="nav-item card upper uk-visible@m"><a href="" class="nav-link default"><i class="icon uk-inline fa fa-check-circle-o fa-3x "></i> selesai</a></li>
                          </ul>
                          <!-- Keterangan -->
                          <i><small><p>Untuk mengikuti event bhhh2 trial run 2018 peserta di wajibkan untuk melengkapi data pada formulir di bawah ini. <br> Pastikan anda memasukan data dengan benar adanya, karena data yang sudah di masukan tidak isa di update kembali.</p></small></i>
                          
                          <div class=" ">
                              <form action="{{ route('peserta.store') }}" method="POST">
                                {{ csrf_field() }}

                                  <div class="form-group">
                                    <label for="" class="default bold">Nomor KTP (Kartu Tanda Penduduk)</label>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                    <input type="text" name="ktp" class="form-control" id="ari" aria-describedby="ari" placeholder="Masukan Nomor Kartu Tanda Penduduk" required >
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default bold">Pilih Jenis Kelamin</label>
                                    <select  class="form-control" name="kelamin_id" id="" required>
                                      <option value="">Pilih Jenis Kelamin</option>
                                      @foreach($kelamin as $data)
                                      <option value="{{ $data->id }}">{{ $data->judul }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default bold">Tanggal Lahir</label>
                                    <input type="date" name="tgl" class="form-control" id="date" placeholder="MM/DD/YYYY" aria-describedby=""  required >
                                  </div>
                                  <div style="display: none" class="form-group">
                                    <label for="" class="default bold">Umur</label>
                                    <input type="text" name="umur" class="form-control" id="umur" aria-describedby=""  required placeholder="Masukan Umur">
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default bold">Golongan Darah</label>
                                    <select  class="form-control" name="darah" id="" required>
                                      <option value="">Pilih Golongan Darah</option>
                                      <option value="A">A</option>
                                      <option value="AB">AB</option>
                                      <option value="B">B</option>
                                      <option value="O">O</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default bold">Kategori Lomba</label>
                                    <select  class="form-control" name="tiket_id" id="" required>
                                      <option value="">Pilih Kategori Lomba</option>
                                      @foreach($tiket as $data)
                                      <option value="{{ $data->id }}">{{ $data->judul }} - Rp. {{ format_uang($data->harga) }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  
                                  <div style="display: none;" class="form-group">
                                    <label for="" class="default bold">Level Lomba</label>
                                    <select   class="form-control" name="kategori_id" id="tes" required>
                                      <option value="">Pilih Level Lomba</option>
                                      @foreach($kategori as $data)
                                      <option value="{{ $data->id }}">{{ $data->judul }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default bold">Ukuran Kaos</label>
                                    <select  class="form-control" name="kaos" id="" required>
                                      <option value="">Pilih Ukuran Kaos</option>
                                      <option value="S">S</option>
                                      <option value="M">M</option>
                                      <option value="L">L</option>
                                      <option value="XL">XL</option>
                                      <option value="XXL">XXL</option>
                                    </select>
                                  </div>
                                   <div class="form-group">
                                    <label for="" class="default bold">Komunitas</label>
                                    <input type="text" name="komunitas" class="form-control" id="" aria-describedby="" placeholder="Masukan Komunitas / Tulis Personal" required >
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default bold">Nomor Telepon</label>
                                    <input type="text" name="telepon" class="form-control" id="" aria-describedby="" placeholder="Masukan Nomor Telepon" required >
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default bold">Nomor Kontak Darurat</label>
                                    <input type="text" name="telepon1" class="form-control" id="" aria-describedby="" placeholder="Masukan Nomor Telepon Darurat" required >
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default bold">Masukan Alamat Lengkap</label>
                                    <textarea name="alamat" class="form-control" placeholder="Masukan Alamat lengkap" required></textarea>
                                    </div>
                                    <div class="form-group">
                                    
                                    <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="" class="default bold">Nama Kota</label>
                                        <input type="text" class="form-control" name="kota" required placeholder="Masukan Nama Kota">
                                      </div>
                                      <div class="col-md-6">
                                        <label for="" class="default bold">Kode Pos</label>
                                        <input type="text" class="form-control" name="pos" required placeholder="Masukan Kode Pos">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                      <div class="custom-control custom-checkbox">
                                          <input class="custom-control-input" value="agree" name="agree-terms" id="check-agree" type="checkbox" required autofoqus>
                                          <label class="custom-control-label text-small" for="check-agree">Anda menyetujui <a href="/syarat" target="_blank">Syarat & ketentuan lomba</a>
                                          </label>
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-lg btn-success btn-block mt-1">Submit</button>
                                </form>
                          </div>
                        </div>
                    </div> 
                </div>                      
        </main>   

@stop
