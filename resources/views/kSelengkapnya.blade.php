@extends('baseHome')
@section('content')

  <!--Konten-->
  <section id="konten" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2><b>KONTEN</b></h2>
          <p>Temukan bencana yang terjadi dan temukan strategi kesiapsiagaan</p>
          <hr class="bottom-line" style="color: #ffc107">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="konten-table">
            <div class="konten-head">
              <img src="/assets/img/imgLongsor1.jpg" style="width: 300px; height: 200px">
              <h5><br>Sering Dilanda Longsor, Dua Kampung di Sawahlunto Jadi Desa Tangguh Bencana</h5>
              <span class="title">LONGSOR</span>
            </div>
            <div class="konten-in mart-15">
              <a href="{{url ('/sering-dilanda-longsor') }}" class="btn btn-bg btn-block">LIHAT</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="konten-table">
            <div class="konten-head">
              <img src="/assets/img/imgAngin1.jpg" style="width: 300px; height: 200px">
              <h5><br>Angin Puting Beliung Terjadi di Daerah Istimewa Yogyakarta Selama 22 Menit</h5>
              <span class="title">ANGIN</span>
            </div>
            <div class="konten-in mart-15">
              <a href="{{url ('/angin-puting-beliung') }}" class="btn btn-bg btn-block">LIHAT</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="konten-table">
            <div class="konten-head">
              <img src="/assets/img/imgGempa1.jpg" style="width: 300px; height: 200px">
              <h5><br>Waspada, Ahli: Sejumlah Daerah di Sumbar Potensi Likuifasi</h5>
              <span class="title">GEMPA</span>
            </div>
            <div class="konten-in mart-15">
              <a href="{{url ('/sejumlah-daerah-di-Sumbar') }}" class="btn btn-bg btn-block">LIHAT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Konten-->

@endsection