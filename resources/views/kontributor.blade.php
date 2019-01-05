<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PEKA BENCANA</title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/now-ui-dashboard.css?v=1.2.0">
  <link rel="stylesheet" href="/assets/css/now-ui-bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/max-bootstrap.min.css">
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="yellow">
      <div class="logo">
        <a class="simple-text logo-normal">
          <b>PEKA</b>BENCANA
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{url ('/kontributor') }}">
              <i class="now-ui-icons education_atom"></i>
              <p>DASHBOARD</p>
            </a>
          </li>
          <li>
            <a href="{{url ('/tambah-konten') }}">
              <i class="now-ui-icons location_map-big"></i>
              <p>KONTEN</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand">Dashboard</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/logoutKontributor">LOGOUT</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">KONTRIBUTOR</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                 <h2>
                   <br> Selamat Datang {{Session::get('nama')}},
                   <br> di Portal Edukasi Kesiapsiagaan Bencana
                 </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>

<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.2.0" type="text/javascript"></script>
</body>

</html>
