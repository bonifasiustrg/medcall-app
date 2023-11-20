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
    body {
      margin: 0; /* Menghilangkan margin default */
      padding: 0; /* Menghilangkan padding default */
      background-color: #EFF5FF;
      position: relative;
    }

    .background-box {
        position: absolute;
        top: 0;
        left: 50%; /* Pusatkan box ke tengah */
        transform: translateX(-50%); /* Pusatkan box ke tengah */
        width: 95%; /* Sesuaikan lebar sesuai kebutuhan */
        height: 400px; /* Sesuaikan tinggi box sesuai kebutuhan */
        background-color: #D1E7FF;
        margin-left: 0; /* Tambahkan margin kiri otomatis */
        margin-right: 0; /* Tambahkan margin kanan otomatis */
    }

    .btn-primary {
        position: relative;
        z-index: 1;
        text-align: center;
        margin-top: 20px;
    }


    .container {
      position: relative;
      z-index: 1; /* Mengatur indeks z agar konten berada di atas background-box */
    }
  </style>
</head>
<body>

  <!-- Kotak persegi panjang di background -->
  <div class="background-box"></div>

  <!-- Formulir -->
  <div class="container">
    <h2>Form Pendaftaran Pengobatan</h2>
    <form>
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

    // Panggil fungsi saat halaman dimuat
    window.onload = updateDokterOptions;
  </script>
@endsection
