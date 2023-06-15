<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <title>Dashboard | @yield('title')</title>
</head>
<body>
    <nav class="navbar bg-primary sticky-top">
        <div class="container-fluid flex-row-reverse">
          <a class="bg-light rounded-circle mx-5" href="#">
            <img class="rounded-circle" src="/assets/user.png" alt="user" width="35" height="35">
          </a>
          <button class="navbar-toggler navbar-dark mx-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-primary">
              <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Dashboard</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/"><i class="fa-solid fa-house"></i>Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-users"></i>
                    Menu Karyawan
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/karyawan">Karyawan</a></li>
                    <li><a class="dropdown-item" href="/jabatan">Jabatan</a></li>
                    <li><a class="dropdown-item" href="/divisi">Divisi</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-calendar-check"></i>
                    Menu Produk
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/stock">Data Produk</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-money-bill-wave"></i>
                    Menu Penggajian
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/slipgaji">Slip Gaji</a></li>
                    <li><a class="dropdown-item" href="/cetakgaji">Cetak Slip Gaji</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-file-lines"></i>
                    Menu Laporan
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/cetaklaporan">Cetak Laporan</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-sharp fa-solid fa-users-gear"></i>
                    Menu Admin
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            </div>
          </div>
        </nav>
      </nav>
      <div class="container-fluid py-4 bg-primary bg-gradient">
  <div class="container text-white">
    @yield('judul')
  </div>
      </div>
      <div class="container">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
          @include('komponen.pesan')
          @yield('content')
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>