@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #EFF5FF; 
    }
</style>
  <section class="container my-5">

  <div class="card shadow-sm" style="background-color: #D1E7FF;">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="card-body" >
                <!-- Konten lainnya di dalam card -->
                <p class="" style="font-weight: 100; font-size: 2rem;">Halo, {{ $userName }}!</p>
                <h2 class="fs-3 fw-bold">Daftar Konsultasi Pengobatan dengan Dokter Sekarang</h2>
                <p>Daftar konsultasi degan dokter sesuai gejala yang anda rasakan!</p>
                <a href="/skemaobat" class="btn btn-primary fs-5 rounded-5" >Daftar Konsultasi</a>
            </div>
        </div>
        <div class="col-md-4">
            <img src="image/dashboard.png" class="card-img" alt="Foto">
        </div>
    </div>
</div>
 

    <div class="row mt-5">
      <div class="col-md-4">
            <a href="/pengingatjanji" class="btn btn-light btn-icon-split rounded-30px" style="border-radius: 15px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <img src="{{ asset('image/konsultasi.png') }}">
            Jadwal Konsultasi
            </a>

      </div>
      <div class="col-md-4">
          <a class="btn btn-light btn-icon-split rounded-30px" style="border-radius: 15px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);" href="/antrian">
            <img src="{{ asset('image/antrian.png') }}">
            Lihat Nomor Antrian
            </a>
      </div>
      <div class="col-md-4">
          <a class="btn btn-light btn-icon-split rounded-30px" style="border-radius: 15px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);" href="/darurat">
            <img src="{{ asset('image/call.png') }}">
            Layanan Darurat
            </a>
</div>

  <!-- Navbar pada bagian bawah -->
  <nav class="navbar fixed-bottom navbar-light" style="background-color: #527BC0;">
    <div class="container-fluid">
      <a class="navbar-brand">
    </div>
  </nav>

@endsection
