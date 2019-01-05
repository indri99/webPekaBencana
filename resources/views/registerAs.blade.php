@extends('baseTron')
@section('content')

  <div class="col-6 d-flex align-items-center text-center">
    <div class="container">
	  <h4>Pilih Peranmu</h4><br>
	  <div class="row">
	    <div class="col-6">
		  <img src="/assets/img/asAdministrator.png" height="265" width="265" style="max-width:100%;height:auto;">
		  <a href="{{url ('/register-as-administrator') }}" class="btn" style="color: black">ADMINISTRATOR</a>
		</div>
		<div class="col-6">
		  <img src="/assets/img/asKontributor.png" height="265" width="265" style="max-width:100%;height:auto;">
		  <a href="{{url ('/register-as-kontributor') }}" class="btn" style="color: black">KONTRIBUTOR</a>
		</div>
	  </div>
	</div>
  </div>

@endsection