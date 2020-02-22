@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Update Bank Accounts
                </h1>
                

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Add Bank Accounts form==================== -->
                <form action="{{route('bank_accounts.update',$id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Enter Bank Accounts Title Here" value="{{$bank_accounts->title}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Bank Accounts</button>
                </form>
            </div>
@endsection