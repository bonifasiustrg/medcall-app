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
                <p class="" style="font-weight: 100; font-size: 2rem;">Halo, Bagoes!</p>
                <h2 class="fs-3 fw-bold">Daftar Konsultasi Pengobatan dengan Dokter Sekarang</h2>
                <p>Daftar konsultasi degan dokter sesuai gejala yang anda rasakan!</p>
                <a href="#" class="btn btn-primary fs-5 rounded-5" >Daftar Konsultasi</a>
            </div>
        </div>
        <div class="col-md-4">
            <img src="image/dashboard.png" class="card-img" alt="Foto">
        </div>
    </div>
</div>
 

    <div class="row mt-5">
      <div class="col-md-4">
          <button type="button" class="btn btn-light btn-icon-split rounded-30px" style="border-radius: 15px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);" href="/pengingatjanji">
            <img src="{{ asset('image/konsultasi.png') }}">
            Jadwal Konsultasi
            </button>
      </div>
      <div class="col-md-4">
          <button type="button" class="btn btn-light btn-icon-split rounded-30px" style="border-radius: 15px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);" href="/jadwaldokter">
            <img src="{{ asset('image/antrian.png') }}">
            Lihat Nomor Antrian
            </button>
      </div>
      <div class="col-md-4">
          <button type="button" class="btn btn-light btn-icon-split rounded-30px" style="border-radius: 15px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);" href="/jadwaldokter">
            <img src="{{ asset('image/call.png') }}">
            Layanan Darurat
            </button>
</div>

  <!-- Navbar pada bagian bawah -->
  <nav class="navbar fixed-bottom navbar-light" style="background-color: #527BC0;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
    </div>
  </nav>

@endsection
