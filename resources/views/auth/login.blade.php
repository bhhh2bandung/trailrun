@extends('index')
@include('layouts.header')
@section('content')
<section class="space-lg content">
                <div class="container align-self-start">
                    
                    <!--end of row-->
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-7">
                            <div class="card card-lg text-center">
                                <div class="card-body">
                                    <div class="mb-5">
                                        <h1 class="h2 mb-2 title default">Login Area</h1>
                                        <span><i>* Pastikan anda rutin untuk pengecekan <br> status akun anda.</i></span>
                                    </div>
                                    <div class="row no-gutters justify-content-center">
                                        <form class="text-left col-lg-8" role="form" method="POST" action="{{ url('/login') }}">
                                                {{ csrf_field() }}
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="login-email">Email Address</label>
                                                <input class="form-control form-control-lg" name="email" id="login-email" placeholder="Email Address" type="email" required value="{{ old('email') }}" autofoqus>
                                                @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="login-password">Password</label>
                                                <input class="form-control form-control-lg" name="password" id="login-password" placeholder="Enter a password" type="password" required>
                                                @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                            <div class="form-group">
                                                <small>Forgot password? <a href="/password/reset">Reset here</a>
                                                </small>
                                            </div>
                                            <div>
                                                <div class="custom-control custom-checkbox align-items-center">
                                                    <input class="custom-control-input" value="box-1" name="box-1" checked="" id="check-remember" type="checkbox" required>
                                                    <label class="custom-control-label text-small" for="check-remember">Remember me next time</label>
                                                </div>
                                            </div>
                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-lg btn-warning btn-block">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!--end of row-->
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <span class="text-small">Belum punya akun? <a href="/register">Daftar sekarang</a>
                                </span>
                            </div>
                        </div>
                        <!--end of col-->
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
@endsection
