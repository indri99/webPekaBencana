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
            <a class="navbar-brand">Konten</a>
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
                <h5 class="title">TAMBAH KONTEN</h5>
              </div>
              <div class="card-body">
                <form action="{{ url('/kontenPost') }}" method="post">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Kabupaten/Kota</label>
                        <input type="text" class="form-control" id="kabupatenkota" name="kabupatenkota" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Kategori</label>
                        <select class="custom-select" id="kategori" name="kategori" required>
                          <option value="gempa">Gempa</option>
                          <option value="tsunami">Tsunami</option>
                          <option value="gunung">Gunung Berapi</option>
                          <option value="kebakaran">Kebakaran Hutan</option>
                          <option value="angin">Angin Tornado</option>
                          <option value="tanah">Tanah Longsor</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <label>Foto</label>
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="foto" name="foto" required>
                        <label class="custom-file-label" for="foto">Pilih Foto</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Isi</label>
                        <textarea rows="4" cols="80" class="form-control" id="isi" name="isi" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" align="right">
                    <button type="submit" class="btn btn-light">Tambah Konten</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.2.0" type="text/javascript"></script>
</body>

</html>
