@extends('baseTron')
@section('content')

  <div class="col-6 d-flex align-items-center text-center">
    <div class="container">
	  <h4 class="form-login-heading display-3 text- text-success" style="color: #009624;"><b>LOGIN</b></h4>
	  @if(\Session::has('alert'))
        <div class="alert alert-danger">
          <div>{{Session::get('alert')}}</div>
        </div>
      @endif
      @if(\Session::has('alert-success'))
        <div class="alert alert-success">
          <div>{{Session::get('alert-success')}}</div>
        </div>
      @endif
      <form action="{{ url('/loginAdministratorPost') }}" method="post">
        {{ csrf_field() }}
      	<div class="form-group">
          <br><input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email"></input>
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password"></input><br>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-md btn-success col-5" style="color: black;">LOGIN</button>
          <a href="{{ url('/') }}" class="btn btn-md btn-danger col-5" role="button" style="color: black">CANCEL</a>
        </div>
        <div class="form-group">
          <br><a href="{{url('register')}}">Buat akun baru</a>
        </div>
      </form>

@endsection