@extends('layouts.app')

@section('content')
<div>
        <h1>{{ __('SignUp') }}</h1>
        <form method="POST" action="{{ route('register') }}">
        @csrf
        <input id="name" type="text" class="email" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Type Full Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <br />
        <input id="email" type="email" class="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Type Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <br />        
        <input id="password" type="password" class="email" name="password" required autocomplete="new-password" placeholder="Type Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <br/>
        <input id="password-confirm" type="password" class="email" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
        <br/>
        <input type="submit" class="primary" value="SignUp"/>
        </form>
</div>
@endsection
