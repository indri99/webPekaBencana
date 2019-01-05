@extends('baseHome')
@section('content')

  <!--Siaga Bencana-->
  <section id="siagaBencana" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2><b>SIAGA BENCANA</b></h2>
          <p>Pengetahuan yang diperlukan dalam menghadapi bencana mencakup pencegahan terjadinya bencana, ciri-ciri akan terjadinya bencana, hal-hal yang harus atau jangan dilakukan saat terjadi bencana, dan langkah-langkah yang perlu dilakukan setelah bencana terjadi.</p>
          <hr class="bottom-line" style="color: #ffc107">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="/assets/img/sb-gempa.png" class="img-responsive">
            <figcaption>
              <h3 style="color: #4B4B4C">GEMPA</h3>
            </figcaption>
            <a href="{{url ('/gempa') }}"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="/assets/img/sb-tsunami.png" class="img-responsive">
            <figcaption>
              <h3 style="color: #4B4B4C">TSUNAMI</h3>
            </figcaption>
            <a href="{{url ('/tsunami') }}"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="/assets/img/sb-gunung.png" class="img-responsive">
            <figcaption>
              <h3 style="color: #4B4B4C">GUNUNG BERAPI</h3>
            </figcaption>
            <a href="{{url ('/gunung-berapi') }}"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="/assets/img/sb-kebakaran.png" class="img-responsive">
            <figcaption>
              <h3 style="color: #4B4B4C">KEBAKARAN HUTAN</h3>
            </figcaption>
            <a href="{{url ('/kebakaran-hutan') }}"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="/assets/img/sb-angin.png" class="img-responsive">
            <figcaption>
              <h3 style="color: #4B4B4C">ANGIN TOPAN</h3>
            </figcaption>
            <a href="{{url ('/angin-topan') }}"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="/assets/img/sb-longsor.png" class="img-responsive">
            <figcaption>
              <h3 style="color: #4B4B4C">LONGSOR</h3>
            </figcaption>
            <a href="{{url ('/longsor') }}"></a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!--/ Siaga Bencana-->
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
  <!--Team member-->
  <section id="team-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2><b>G Z</b></h2>
          <hr class="bottom-line" style="color: #ffc107">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="/assets/img/member1.png" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Indri Dwi Febriani</p>
              <p class="pm-staff-profile-title">17523111</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="/assets/img/member2.png" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Luna Bunga Karolina</p>
              <p class="pm-staff-profile-title">17523116</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="/assets/img/member3.png" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Ayu Nastiti</p>
              <p class="pm-staff-profile-title">17523119</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Team member-->

@endsection