@extends('index')
@include('layouts.header')
@section('content')
<section class="bg-hero1 space-lg">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12 col-md-6 col-lg-5 section-intro text-white">
                            <h1 class="display-3 title">BHHH2 Trail Run 2018</h1>
                            <span class="lead">
                                Daftarkan segera diri anda untuk mengikuti event ini yang akan di laksanakan di lembang bandung jawa barat indonesia.
                            </span>
                        </div>
                        <!--end of col-->
                        <div class="col-12 col-md-6 col-lg-5">
                            <div class="card content">
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ url('/register') }}">
                                    {{ csrf_field() }}
                                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="exampleInputUsername">Nama Lengkap</label>
                                            <input class="form-control form-control-lg" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Nama Lengkap" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class=" text-danger">
                                                   <small><i>* {{ $errors->first('name') }}</i></small>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="exampleInputEmail">Email address</label>
                                            <input class="form-control form-control-lg" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email" type="email" name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class=" text-danger">
                                                <small><i>* {{ $errors->first('email') }}</i></small>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="exampleInputPassword">Password</label>
                                            <input class="form-control form-control-lg" id="exampleInputPassword" placeholder="Password" type="password" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class=" text-danger">
                                                <small><i>* {{ $errors->first('password') }}</i></small>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword">Konfirmasi Password</label>
                                            <input class="form-control form-control-lg" id="exampleInputPassword" placeholder="Konfirmasi Password" type="password" name="password_confirmation" required>
                                        </div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" value="agree" name="agree-terms" id="check-agree" type="checkbox" required autofoqus>
                                                <label class="custom-control-label text-small" for="check-agree">I agree to the <a href="/syarat" target="_blank">Terms &amp; Conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-success btn-block">Daftar Sekarang</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

@endsection
