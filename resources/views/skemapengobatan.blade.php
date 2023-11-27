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
            height: 380px; /* Change height to min-height */
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
            top: 12cm;
            left: 50%;
            z-index: 1;
            transform: translate(-50%, -50%);
            text-align: center;
            background-color: #527BC0;
        }

        .container {
            position: relative;
            z-index: 1;
            margin-right: 10%;
            padding-bottom: 1px; /* Adjust the padding to reduce the size of the navbar */
        }

        h2 {
            margin-left: 1cm;
            margin-top: 1cm;
        }

        form {
            max-width: 300px; /* Adjust the max-width based on your desired size */
            margin-left: 1cm;
            margin-right: 12cm;
            border-radius: 0px; /* Rounded corners for the form */
            overflow: hidden; /* Hide overflowing content (like the rounded corners) */
        }

        .title {
            margin-top: 20px; /* Add margin to separate the title from the background box */
        }

        /* Add the following styles for button and spacing */
        .btn-lihat-jadwal {
            background-color: #527BC0;
            color: #ffffff; /* Text color */
            border: none;
        }

        .form-group {
            margin-bottom: 0.5cm; /* Add spacing of 0.5cm between form groups */
        }

        #poli option[disabled] {
        color: #808080; /* Change this to the desired shade of gray */
        }
    </style>
</head>
<body>

<div class="background-box">
    <img src="{{ asset('image/4893665 1.png') }}" alt="Gambar contoh" class="rounded" style="width: 550px; height: 400px;">
</div>

<div class="container">
    <h2>Form Pendaftaran Pengobatan</h2>
    <form>
        <div class="form-group">
            <label for="nama">Nama*</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda">
        </div>
        <div class="form-group">
            <label for="poli">Pilih Poli*</label>
            <select class="form-control" id="poli" name="poli" required onchange="updateDokterOptions()">
                <option value="" disabled selected hidden>Silahkan pilih poli</option>
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Gigi dan Mulut">Poli Gigi dan Mulut</option>
                <option value="Poli Penyakit Dalam">Poli Penyakit Dalam</option>
                <option value="Poli Jiwa">Poli Jiwa</option>
                <option value="Poli Mata">Poli Mata</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal Konsultasi*</label>
            <div class="input-group">
                <input type="date" class="form-control" id="tanggal" name="tanggal" required placeholder="Silahkan pilih tanggal">
                <button type="button" class="btn btn-lihat-jadwal" onclick="lihatJadwal()">Lihat Jadwal Dokter</button>
            </div>
        </div>
        <div class="form-group">
            <label for="dokter">Pilih Dokter*</label>
            <select required class="form-control" id="dokter" name="dokter">
                <!-- Opsi dokter akan diperbarui dengan JavaScript -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
</div>

<nav class="navbar fixed-bottom navbar-light" style="background-color: #527BC0;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
    </div>
</nav>

<script>
    function updateDokterOptions() {
        var poliSelect = document.getElementById('poli');
        var dokterSelect = document.getElementById('dokter');

        dokterSelect.innerHTML = "";

        if (poliSelect.value === "Poli Umum") {
            var dokters = ["dr. Indra Perkasa", "dr. Crtistian Julian"];
        } else if (poliSelect.value === "Poli Gigi dan Mulut") {
            var dokters = ["dr. Mamat Hasanudin", "dr. Indah Berlian", "dr. Mia Kalindra"];
        } else if (poliSelect.value === "Poli Penyakit Dalam") {
            var dokters = ["dr. Mega Handayani", "dr. Salsabila Susanti", "dr. Pramudya Bagus"];
        } else if (poliSelect.value === "Poli Jiwa") {
            var dokters = ["dr. Bambang Wijaksono"];
        } else if (poliSelect.value === "Poli Mata") {
            var dokters = ["dr. Sudantoro Agus"];
        }

        for (var i = 0; i < dokters.length; i++) {
            var option = document.createElement('option');
            option.value = dokters[i];
            option.text = dokters[i];
            dokterSelect.appendChild(option);
        }
    }

    function lihatJadwal() {
        alert('Menampilkan jadwal dokter...');
    }

    window.onload = updateDokterOptions;
</script>
</body>
</html>

@endsection
