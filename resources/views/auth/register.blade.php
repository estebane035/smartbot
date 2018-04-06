@extends('layouts.login')

@section('content')
<div>
    <div>
        <h1 class="logo-name">IN+</h1>
    </div>
    <h3>{{ __('Register') }}</h3>
    <p>Create account to see it in action.</p>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" required="" value="{{ old('name') }}" name="name">
            @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" required="" value="{{ old('email') }}" name="email">
            @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" required="" name="password">
            @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <input id="password-confirm" name="password_confirmation" type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" required="">
        </div>
        <div class="form-group">
            <!--div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div-->
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Register') }}</button>
        <p class="text-muted text-center"><small>Ya tienes una cuenta?</small></p>
        <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">{{ __('Login') }}</a>
    </form>
    <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
</div>
@endsection