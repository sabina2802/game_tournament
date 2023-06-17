@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$user_count}}</h3>
            <p>Total Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
        </div>
      </div>

   </div>
@stop