@extends('layouts.app')

@section('content')
<div class="container">
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>MEDCALL</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    <style>
      body {
        margin: 0;
        padding: 0;
        background-color: #EFF5FF;
        position: relative;
      }

      .background-box {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 95%;
        min-height: 350px; /* Change height to min-height */
        background-color: #D1E7FF;
        margin-left: 30px;
        margin-right: 5px;
        text-align: right; /* Align text (including the image) to the right */
        border-radius: 20px; /* Rounded corners */
        overflow: hidden; /* Hide overflowing content (like the rounded corners) */
      }

      .background-box img {
        width: 100%; /* Set the width of the image to 100% of the background box */
        height: auto;
        position: absolute;
        top: 50%; /* Center the image vertically */
        right: 0; /* Align the image to the right */
        transform: translateY(-50%);
      }

      .btn-primary {
        position: absolute;
        top: 10cm;
        left: 50%;
        z-index: 1;
        transform: translate(-50%, -50%);
        text-align: center;
      }

      .container {
        position: relative;
        z-index: 1;
        margin-right: 10%;
        padding-bottom: 60px; /* Add padding to the bottom for the fixed navbar */
      }

      h2 {
        margin-left: 1cm;
        margin-top: 0.5cm;
      }

      form {
        max-width: 400px;
        margin-left: 1cm;
        margin-right: 12cm;
        border-radius: 0px; /* Rounded corners for the form */
        overflow: hidden; /* Hide overflowing content (like the rounded corners) */
      }
    </style>
</head>
<body>

  <!-- Kotak persegi panjang di background -->
  <div class="background-box">
    <img src="{{ asset('image/4893665 1.png') }}" alt="Gambar contoh" class="rounded" style="width: 550px; height: 350px;">
  </div>

  <!-- Formulir -->
  <div class="container">
    <h2>Form Pendaftaran Pengobatan</h2>
    <form>
        <!-- Form fields go here -->
        <div class="form-group">
            <label for="nama">Nama*</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda">
        </div>
        <div class="form-group">
            <label for="poli">Pilih Poli*</label>
            <select class="form-control" id="poli" name="poli" onchange="updateDokterOptions()">
                <option>Poli Umum</option>
                <option>Poli Gigi dan Mulut</option>
                <option>Poli Penyakit Dalam</option>
                <option>Poli Jiwa</option>
                <option>Poli Mata</option>
                <!-- Tambahkan opsi lainnya di sini -->
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Konsultasi*</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="form-group">
            <label for="dokter">Pilih Dokter*</label>
            <select class="form-control" id="dokter" name="dokter" placeholder="Masukkan Nama Lengkap Anda">
                <!-- Opsi dokter akan diperbarui dengan JavaScript -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
  </div>

  <!-- Navbar pada bagian bawah -->
  <nav class="navbar fixed-bottom navbar-light" style="background-color: #527BC0;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
    </div>
  </nav>

  <script>
    function updateDokterOptions() {
      // Function content remains the same
      var poliSelect = document.getElementById('poli');
      var dokterSelect = document.getElementById('dokter');
      
      // Kosongkan opsi dokter terlebih dahulu
      dokterSelect.innerHTML = "";

      // Tambahkan opsi dokter berdasarkan pilihan poli
      if (poliSelect.value === "Poli Penyakit Dalam") {
        var dokters = ["dr. A", "dr. B", "dr. C"];
      } else if (poliSelect.value === "Poli Gigi dan Mulut") {
        var dokters = ["dr. D", "dr. E", "dr. F"];
      } else {
        // Tambahkan logika untuk poli lain jika diperlukan
        var dokters = [];
      }

      for (var i = 0; i < dokters.length; i++) {
        var option = document.createElement('option');
        option.value = dokters[i];
        option.text = dokters[i];
        dokterSelect.appendChild(option);
      }
    }

    window.onload = updateDokterOptions;
  </script>
@endsection
