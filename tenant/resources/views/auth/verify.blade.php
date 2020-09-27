@extends('layouts.app')

@section('content')
<div>
        <h1>{{ __('Retrieve Password') }}</h1>
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <input id="email" type="email" name="email" class="email" placeholder="Type Email"/>
        <br />
                @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
        </form>
</div>
@endsection
