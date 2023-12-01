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
    a {
      font-size: 30px;
    }
  </style>
</head>
<body>
  <a href="tel:+6281221682383">+62 812-2168-2383</a>

<footer class="footer">
  <img src="{{ asset('image/Rectangle 4213.png') }}" alt="Image" class="img-fluid w-100">
</footer>

@endsection
