@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top:30px">
        @include('partials._dashboard-menu')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{auth()->user()->name}}, you are now logged in!
                    <hr>
                    @if(!auth()->user()->registered)
                        <div class="alert alert-danger text-left">
                            Next you need to complete your <strong>company profile</strong> registration.
                            <a href="{{route('company.registration')}}">Click here</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
