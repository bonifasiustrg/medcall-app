@extends('layouts.app')

@section('content')


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

  <div class="text-center">
    <img src="{{ asset('image/emergency.png') }}" alt="Gambar contoh" class="rounded">
  </div>


  <div style="text-align: right;">
    <img src="{{ asset('image/emergencycall.png') }}" alt="Image" class="img-fluid">
  </div>
</body>

<footer class="footer">
  <img src="{{ asset('image/Rectangle 4213.png') }}" alt="Image" class="img-fluid w-100">
</footer>

@endsection