@extends('index')
@include('layouts.header')
@section('content')
<section class="space-lg">
                <div class="container align-self-start">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <p class="bold">{{ session('status') }}</p>
                    <p class="mb-0">Silahkan cek email anda untuk mereset password.</p>
                    </div>
                @endif
                    <!--end of row-->
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-7">
                            <div class="card card-lg text-center">
                                <div class="card-body content">
                                    <div class="mb-4 mt-5">
                                        <h2 class="mb-2 title default">Reset password</h2>
                                        <span>Masukan Email Address Anda</span>
                                    </div>
                                    <div class="row no-gutters justify-content-center">
                                        <form class="text-left col-lg-8" method="POST" action="{{ url('/password/email') }}">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <input class="form-control form-control-lg"  id="reset-email" placeholder="Email Address" type="email" name="email" value="{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">
                                                        <small><i>* {{ $errors->first('email') }}</i></small>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="text-center mb-4">
                                                <button type="submit" class="btn btn-warning btn-lg btn-block">Reset password</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!--end of row-->
                                </div>
                            </div>
                        </div>
                        <!--end of col-->
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
@endsection
