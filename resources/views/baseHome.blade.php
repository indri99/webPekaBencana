<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PEKA BENCANA</title>

  <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/css/imagehover.min.css">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/mainStyle.css">
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{url ('/') }}">PEKA<span>BENCANA</span></a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#siagaBencana">SIAGA BENCANA</a></li>
          <li><a href="#konten">KONTEN</a></li>
          <li class="btn-login"><a href="{{url ('/login') }}">LOGIN</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">PORTAL EDUKASI KESIAPSIAGAAN BENCANA</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  
  @yield('content')

  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">
      UNIVERSITAS ISLAM INDONESIA<br>
      Jalan Kaliurang km. 14,5 Sleman<br>
      Yogyakarta 55584
    </div>
  </footer>
  <!--/ Footer-->
  <script src="/assets/js/custom.js"></script>
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/jquery.easing.min.js"></script>
</body>

</html>
