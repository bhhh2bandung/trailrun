@extends('index')
@include('layouts.header')
@section('content')
      <section class="bg-hero1 space-m">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12 col-md-6 col-lg-5 section-intro">
                            <h1 class="display-3 text-white title">Daftar Peserta </h1>
                            <span class="lead text-white">
                                Berikut daftar peserta lomba resmi <br> BHHH2 Trail Run 2018 .
                            </span>
                        </div>
                        <!--end of col-->
                        <div class="col-12 col-md-6 col-lg-5">
                            
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <div class="space-m">
            <section>
              <div class="container">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control p-3" placeholder="Cari Nama Anda.." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn " type="button"><i class="uk-icon" uk-icon="icon:search"></i></button>
                    </div>
                  </div>
                  <!-- <small><p class="">Silahkan lakukan pencarian untuk melihat nama anda pada table di bawah.</p> -->
              </div>
            </section>
            <section>
              <div class="container ">
              <div class="uk-overflow-auto card">
              <table class="uk-table uk-table-striped content">
                  <thead>
                    <tr class="">
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Komunitas</th>
                      <th scope="col">Level</th>
                      <th scope="col">Kategori</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($status as $data)
                    <tr>
                      <td >{{ $data ->id }}</td>
                        <td ><b class="capt">{{ $data ->upload->peserta->user->name }}</b></td>
                        <td >{{ $data ->upload->peserta->komunitas }}</td>
                        <td >{{ $data ->upload->peserta->kategori->judul }}</td>
                        <td >{{ $data ->upload->peserta->tiket->judul }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              </div>
            </section>
            <section>
              <div class="container content">
                <p><small><i>* Lakukan pembayaran dahulu agar nama anda muncul pada table di atas.</i></small></p>
              </div>
            </section>
          </div>
@stop