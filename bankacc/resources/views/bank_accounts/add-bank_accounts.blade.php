@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Add Bank Accounts
                </h1>
                

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Add Bank Accounts form==================== -->
                <form action="{{route('bank_accounts.save')}}" method="post">
                    <div class="form-group">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="title" placeholder="Enter Bank Accounts Title Here">
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Add Bank Accounts</button>
                </form>
            </div>
@endsection