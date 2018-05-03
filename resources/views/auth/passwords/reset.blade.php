@extends('index')
@include('layouts.header')
@section('content')

<section class="space-lg">
                <div class="container align-self-start">
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-7">
                            <div class="card card-lg text-center">
                                <div class="card-body content">
                                    <div class="mb-5">
                                        <h1 class="h2 mb-2 title default">New Password</h1>
                                        <span> <i>* Silahkan masukan password baru anda</i></span>
                                    </div>
                                    <div class="row no-gutters justify-content-center">
                                        <form role="form" class="text-left col-lg-8" method="POST" action="{{ url('/password/reset') }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="token" value="{{ $token }}">
                                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="login-email">Email Address</label>
                                                <input class="form-control form-control-lg" name="email" id="login-email" placeholder="Email Address" type="email" value="{{ $email or old('email') }}" required autofoqus>
                                                @if ($errors->has('email'))
                                                        <span class="text-danger">
                                                            <small><i>* {{ $errors->first('email') }}</i></small>
                                                        </span>
                                                    @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="login-password">Password</label>
                                                <input class="form-control form-control-lg" name="password" id="login-password" placeholder="Enter a password" type="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">
                                                    <small><i>* {{ $errors->first('password') }}</i></small>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                <label for="login-password">Konfirmasi Password</label>
                                                <input class="form-control form-control-lg" name="password_confirmation" id="login-password" placeholder="Konfirmasi password" type="password" required>
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="text-danger">
                                                    <small><i>* {{ $errors->first('password_confirmation') }}</i></small>
                                                    </span>
                                                @endif
                                            </div>
                                            
                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-lg btn-warning default">Reset Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
@endsection
