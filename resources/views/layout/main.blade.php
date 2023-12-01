<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrapt Demo</title>
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
          <a class="navbar-brand text-light" href="#">PT. GREEN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="/Home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" href="/jabatan/index">Jabatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" href="/karyawan/index">Karyawan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" href="/gaji/index">Gaji</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" href="/laporan">Laporan</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      {{-- CONTENTN --}}
      <div class="div container">
        <div class="row m-4">
            <div class="col">
                @yield('content')
            </div>
        </div>
      </div>

      {{-- JAVASCRIPT --}}
      <script src="js/bootstrap.min.js"></script>
</body>
</html>
