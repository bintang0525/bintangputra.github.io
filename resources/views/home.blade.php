@extends('template.user')

@section('title')
    Profile
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
  <style>
  h1 {
    font-family: fa5-proxima-nova,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: bolder;
    text-align: center;
  }
  .col-md-4 {
    border: 2px outset grey;
    border-radius: 20px;
    border-width: 10px;
  }
  </style>
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->
  
<div class="row justify-content-center">
  <div class="col-md-4">
      <img class="img-profile" src="https://th.bing.com/th/id/OIP.x7VFS3bw9ajKKkoZF9iUcwHaHa?w=180&h=180&c=7&r=0&o=5&dpr=1.1&pid=1.7" alt="no-image">
      
      <h1>Foto Profil</h1>
  </div>
  <div class="offset-md-2 col-md-6">
      <div class="content">
        <!-- Data User -->
      <label for="">Name</label>
      <p>{{Auth::user()->name}}</p>
      <label for="">Email</label>
      <p>{{Auth::user()->email}}</p>
      <label for="">Address</label>
      <p>{{Auth::user()->address}}</p>
      <label for="">Phone</label>
      <p>{{Auth::user()->phone}}</p>
          </div>
      </div>
</div>
</div>
@endsection
