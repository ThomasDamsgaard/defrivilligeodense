@extends('layouts.app')

@section('content')

<section class="section">
  <div class="container column is-6 has-text-centered">
    <h1 class="title has-padding-top">De frivillige - Medlemsdatabase</h1>
    <h1 class="subtitle has-padding-top"><strong>Login</strong></h1>
    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
      @csrf
      <div class="field">
        <p class="control has-icons-left has-icons-right">
          <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
          <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
          </span>
        </p>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
      <div class="field">
        <p class="control has-icons-left">
          <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
          <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
          </span>
        </p>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>
      <div class="field">
        <p class="control">
          <button type="submit" class="button is-success">
            Log ind
          </button>
        </p>
      </div>
    </form>
  </div>
</section>

@endsection
