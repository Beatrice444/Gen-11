@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container">
                <h1 class="pull-xs-left">
                    Details
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('details.add' ,$id)}}" role="button">
                        New Details +
                    </a>
                </div>
                <div class="clearfix">
                </div>
                <!--============= details=========== -->
                <div class="list-group details-group">
                    @foreach($details as $details)
                    <!--details1 -->
                    <div class="card card-block">
                        <a href="{{route('details.specific',$details->id)}}">
                            <h4 class="card-title">
                                {{$details->title}}
                            </h4>
                        </a>
                        <p class="card-text">
                           {{$details->body}}              
                       </p>
                        <a class="btn btn-sm btn-info pull-xs-left" href="{{route('details.edit',[$details->id,$id])}}">
                            Edit
                        </a>
                        <form action="{{route('details.delete',[$details->id,$id])}}" class="pull-xs-right" method="POST">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <input class="btn btn-sm btn-danger" type="submit" value="
                        Delete">
                          
                        </form>
                    </div>
                </div>
                    @endforeach
            </div>
@endsection