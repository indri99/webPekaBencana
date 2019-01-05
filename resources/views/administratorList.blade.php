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
            <a href="{{url ('/administrator') }}">
              <i class="now-ui-icons education_atom"></i>
              <p>DASHBOARD</p>
            </a>
          </li>
          <li>
            <a href="{{url ('/daftar-konten') }}">
              <i class="now-ui-icons design_bullet-list-67"></i>
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
      <div class="content" id="app">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">DAFTAR KONTEN</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <tr>
                        <th>Judul</th>
                        <th>Lokasi</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($konten as $k)
                      <tr>
                        <td>{{ $k->judul }}</td>
                        <td>{{ $k->kabupatenkota }}</td>
                        <td>{{ $k->kategori }}</td>
                        <td>
                          <form action="{{url('konten/'.$k -> id)}}" method="post">
                            {{csrf_field()}} {{method_field('DELETE')}}
                            <button type="submit" name="button" class="btn btn-sm btn-danger">HAPUS</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
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
