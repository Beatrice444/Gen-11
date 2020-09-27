@extends('layouts.app')
@section('content')
        <div>
        <h1>{{ __('SignIn') }}</h1>
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <input id="email" type="email" class="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <br />
        <input id="password" type="password" class="email" name="password" required autocomplete="current-password" placeholder="Type Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                       
        <br/>
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
        </label>
        <input type="submit" class="primary" value="SignIn"/>
        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Retrieve Password?') }}
                                    </a>
                                @endif
        </form>
        </div> 
@endsection
