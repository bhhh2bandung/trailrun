@extends('seller.gin')
@section('content')

<form class="form-signin" method="POST" action="{{ url('/seller_login') }}">
{{ csrf_field() }}
      <div class="text-center mb-4">
        <img class="mb-4" src="{{ asset('img/bhhh2.png') }}" alt="" width="150">
      </div>

      <div class="form-label-group {{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <label for="inputPassword">Password</label>
      </div>
      <button class="btn btn-lg bg-gradient text-white btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; Develope by Agung Senjaya.</p>
    </form>
@endsection
