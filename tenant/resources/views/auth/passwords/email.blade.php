@extends('layouts.app')
@section('content')
    <body style="background:black;">
        <div style="text-align:center ;
                    position:relative ;
                    top:80px;
                    font-size:20px;">

        <h1 style="color:white;
                   text-shadow:0px 0px 10px black;
                   border-bottom:4px solid #ffffff;
                   width:160px;
                   padding-bottom:5px;
                   margin:10px;
                   margin-top:10px;
                   position:relative ;
                   left:65px;
                   animation:h1 0.8s;
                   animation-timing-function:;
                   ">
        {{ __('Reset Password') }}
        </h1>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type Email"
                            style="border-style:none;
                                   border-bottom:1px solid #ffffff;
                                   background:none;
                                   font-size:17px;
                                   margin:10px;
                                   color:white;
                                   outline:none;
                                   width:200px;
                                   transition:0.2s;
                                   animation:email 0.8s;
                                   animation-timing-function:;
                                   position:relative ;
                                   ">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <br/>
                                <input type="submit" value="Reset password" style="background:none;
                                                                           color:white;
                                                                           border-style:none;
                                                                           border:1px solid white;
                                                                           width:200px;
                                                                           margin-top:15px;
                                                                           transition:0.2s;
                                                                           animation:submit 0.8s;
                                                                           animation-timing-function:;
                                                                           position:relative ;
                                                                           box-shadow:0px 0px 5px black;
                                                                           " />            
        </div>
    </body>
@endsection
