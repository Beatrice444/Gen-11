@extends('layouts.master')

@section('main')
        <!-- Main component for call to action -->
        <div class="jumbotron">
            <h1>{{$details->title}}</h1>
            <p> 
                {{$details->body}}
            </p>
        </div>
    </div>
@endsection