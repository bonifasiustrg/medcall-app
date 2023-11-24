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

<div id="app"></div>

<script src="{{ mix('js/app.js') }}"></script>
<script>
  // Mengasumsikan Anda menggunakan Laravel Mix untuk mengompilasi aset
  // Gantilah 'resources/js/components/JadwalDokter' dengan path yang benar ke komponen Anda
  import JadwalDokter from './C:/belajar woi/medcall-app/resources/js/components/JadwalDokter';

  // Render komponen React
  ReactDOM.render(<JadwalDokter />, document.getElementById('app'));
</script>

</body>
</html>

@endsection
