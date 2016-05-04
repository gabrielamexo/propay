@extends('layouts.master')

@section('title')
Propay - Evaluation
@endsection

@section('page_name')
Propay
@endsection

@section('page_description')
Evaluation
@endsection

@section('sidebar')
@if (Auth::guest())
    <li class="ngreen"><a href="{{ url('/login') }}"><i class="icon-bar-chart"></i>Login</a></li>
    <li class="ngreen"><a href="{{ url('/register') }}"><i class="icon-bar-chart"></i>Register</a></li>
@else
    <li class="ngreen"><a href="{{ url('/add') }}"><i class="icon-bar-chart"></i> Add Member</a></li>
    <li class="ngreen"><a href="{{ url('/list') }}"><i class="icon-bar-chart"></i> List Members</a></li>
@endif

@endsection




@section('content')


<div class="col-md-5"> 

Hello, welcome to my evaluation assessment!

</div>






@endsection

@section('extra_bottom')


@endsection
