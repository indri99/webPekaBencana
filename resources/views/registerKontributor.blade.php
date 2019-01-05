@extends('baseTron')
@section('content')

  <div class="col-6 d-flex align-items-center text-center">
    <div class="container">
	    <h4 class="form-login-heading display-3 text- text-success" style="color: #009624;"><b>REGISTER</b></h4>
	    <p>Silakan isi formulir ini untuk membuat akun</p>
	    @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="{{ url('/registerKontributorPost') }}" method="post">
        {{ csrf_field() }}
      	<div class="form-group">
          <br><input type="text" class="form-control form-control-lg" id="nama" name="nama" placeholder="Nama" required></input>
        </div>
        <div class="form-group">
          <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email" required></input>
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required></input>
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-lg" id="konfirmasi" name="konfirmasi" placeholder="Konfirmasi Password" required></input><br>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-md btn-success col-5" style="color: black;">SUBMIT</button>
          <a href="{{ url('/') }}" class="btn btn-md btn-danger col-5" role="button" style="color: black">CANCEL</a>
        </div>
        <div class="form-group">
          <br><p>Sudah memiliki akun? <a href="{{url('login')}}">Login</a>.</p>
        </div>
      </form>

@endsection