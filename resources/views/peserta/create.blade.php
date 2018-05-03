@extends('index')
@include('layouts.header')
@section('content')
        <main>
            <div class="bg-reg content">
                        <div class="pt-5 pb-5">
                        <div class="container ">
                        <div class=" bg-default">
                            <img class="uk-visible@m" src="{{ asset('img/bg-reg1.png') }}" alt="">
                            <div class="uk-hidden@m">
                              <div class="uk-card-body text-center text-white bold">
                                <p class="uk-margin-remove upper"> form pendaftaran</p>
                                <small>Untuk Mengikuti BHHH2 Trail Run 2018 Silahkan Lengkapi formulir di bawah ini</small>
                              </div>
                            </div>
                        </div>
                          <!-- <p class=" text-center default">Silahkan lengkapi formulir di bawah ini untuk mengikuti event BHHH2 Trail Run 2018.</p> -->
                          <div class=" uk-card-default uk-padding ">
                              
                              <form action="{{ route('peserta.store') }}" method="POST">
                                {{ csrf_field() }}

                                  <div class="form-group">
                                    <label for="" class="default ">Nomor KTP (Kartu Tanda Penduduk)</label>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                    <input type="text" name="ktp" class="form-control" id="ari" aria-describedby="ari" placeholder="Masukan Nomor Kartu Tanda Penduduk" required >
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default ">Pilih Jenis Kelamin</label>
                                    <select  class="form-control" name="kelamin_id" id="" required>
                                      <option value="">Pilih Jenis Kelamin</option>
                                      @foreach($kelamin as $data)
                                      <option value="{{ $data->id }}">{{ $data->judul }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default ">Tanggal Lahir</label>
                                    <input type="date" name="tgl" class="form-control" id="date" placeholder="MM/DD/YYYY" aria-describedby=""  required >
                                  </div>
                                  <div style="display: none" class="form-group">
                                    <label for="" class="default ">Umur</label>
                                    <input type="text" name="umur" class="form-control" id="umur" aria-describedby=""  required placeholder="Masukan Umur">
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default ">Golongan Darah</label>
                                    <select  class="form-control" name="darah" id="" required>
                                      <option value="">Pilih Golongan Darah</option>
                                      <option value="A">A</option>
                                      <option value="AB">AB</option>
                                      <option value="B">B</option>
                                      <option value="O">O</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default ">Kategori Lomba</label>
                                    <select  class="form-control" name="tiket_id" id="" required>
                                      <option value="">Pilih Kategori Lomba</option>
                                      @foreach($tiket as $data)
                                      <option value="{{ $data->id }}">{{ $data->judul }} - Rp. {{ format_uang($data->harga) }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  
                                  <div style="display: none;" class="form-group">
                                    <label for="" class="default ">Level Lomba</label>
                                    <select   class="form-control" name="kategori_id" id="tes" required>
                                      <option value="">Pilih Level Lomba</option>
                                      @foreach($kategori as $data)
                                      <option value="{{ $data->id }}">{{ $data->judul }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default ">Ukuran Kaos</label>
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
                                    <label for="" class="default ">Komunitas</label>
                                    <input type="text" name="komunitas" class="form-control" id="" aria-describedby="" placeholder="Masukan Komunitas / Tulis Personal" required >
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default ">Nomor Telepon</label>
                                    <input type="text" name="telepon" class="form-control" id="" aria-describedby="" placeholder="Masukan Nomor Telepon" required >
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default ">Nomor Kontak Darurat</label>
                                    <input type="text" name="telepon1" class="form-control" id="" aria-describedby="" placeholder="Masukan Nomor Telepon Darurat" required >
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="default ">Masukan Alamat Lengkap</label>
                                    <textarea name="alamat" class="form-control" placeholder="Masukan Alamat lengkap" required></textarea>
                                    </div>
                                    <div class="form-group">
                                    
                                    <div class="row">
                                      <div class="col-md-6">
                                        <input type="text" class="form-control" name="kota" required placeholder="Masukan Nama Kota">
                                      </div>
                                      <div class="col-md-6">
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
                                  <button type="submit" class="btn btn-lg btn-warning btn-block mt-1">Daftar</button>
                                </form>
                          </div>
                        </div>
                    </div> 
                </div>                      
        </main>   

@stop
