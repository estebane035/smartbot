@extends('layouts.login')

@section('content')
        <div>
            <div>
                <h1 class="logo-name">IN+</h1>
            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form method="POST" action="{{ route('login') }}" class="m-t">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" required="" name="email">

                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                     @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" name="password" required="">

                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary  block full-width m-b">{{ __('Login') }}</button>

                <a href="{{ route('password.request') }}"><small>{{ __('Forgot Your Password?') }}</small></a>
                <a class="btn btn-sm btn-white btn-block m-t" href="{{ route('register') }}">{{ __('Register') }}</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
@endsection