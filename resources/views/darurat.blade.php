<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>MEDCALL</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body {
      background-color: #EFF5FF;
    }
    .navbar-atas {
      background-color: #EFF5FF;
      color: #000000;
    }
  </style>
</head>
<body>

  <!-- Navbar atas -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-atas" style="background-color: #527BC0;">
    <div class="container-fluid">
    <a><img src="{{ asset('image/navbar.png') }}" alt="" class="img-fluid w-52"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pencarian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Akun</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="text-center">
    <img src="{{ asset('image/emergency.png') }}" alt="Gambar contoh" class="rounded">
  </div>


  <div style="text-align: right;">
    <img src="{{ asset('image/emergencycall.png') }}" alt="Image" class="img-fluid">
  </div>
</body>

<footer>
<img src="{{ asset('image/Rectangle 4213.png') }}" alt="Image" class="img-fluid">
</footer>

