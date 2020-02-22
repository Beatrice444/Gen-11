@extends('layouts.master')

@section('main')
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Your Bank Accounts
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('bank_accounts.add')}}" role="button">
                        New Bank Accounts +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Bank Accounts ==================== -->
                <!-- bank accounts1 -->
                @foreach($bank_accounts as $bank_accounts)
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="{{route('details', $bank_accounts->id)}}">
                                <h4 class="card-title">
                                   {{ $bank_accounts->title }}
                                </h4>
                            </a>
                        </div>
                        <a href="#">
                            <img alt="Responsive image" class="img-fluid" src="dist/img/notebook.jpg"/>
                        </a>
                        <div class="card-block">
                            <a class="card-link" href="{{route('bank_accounts.edit',$bank_accounts->id)}}">
                                Edit Bank Accounts
                            </a>
                            <form action="{{route('bank_accounts.delete',$bank_accounts->id)}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
 @endsection          