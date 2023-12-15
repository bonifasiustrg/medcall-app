@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #EFF5FF; 
    }
</style>

<div class="container-fluid">
    <div class="row align-items-start">
    <div class="col">
        <img src="{{ asset('image/latar.png') }}" alt="" class="img-fluid w-52">
    </div>
    <div class="col">
        <h1 class="text-center", style="color: #2771CA">Selamat Datang!</h1>
        <p class="text-center", style="color: #555568">Silakan Masukkan Alamat Email, Kata Sandi dan Nomor Kartu Pengobatan Anda</p>

        {{-- FORM LOGIN --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf
            @method('POST')
    <div class="form-group">
        <label for="email" style="color: #2771CA; font-size: 14px;" class="fw-bold">Email*</label>
        <input type="email" class="form-control form-control-lg w-50 -71" id="email" name="email" required placeholder="Masukkan Alamat Email">

        <label for="password" style="color: #2771CA; font-size: 14px;" class="fw-bold">Kata Sandi*</label>
        <input type="password" class="form-control form-control-lg w-50 -71" id="password" name="password" required placeholder="Masukkan Kata Sandi">

        {{-- <label for="card_number" style="color: #2771CA; font-size: 14px;" class="fw-bold">Nomor Kartu*</label>
        <input type="text" class="form-control form-control-lg w-50 -71" id="card_number" name="card_number" required placeholder="Masukkan Nomor Kartu"> --}}
        <label for="roles" class="form-label">Login Sebagai</label>
        <select name="roles" class="form-select form-control-lg w-50 -71" aria-label="Default select example">
            <option value="pasien">Pasien</option>
            <option value="admin">Staff/Admin</option>
        </select>
        
        </div>
        <br>

            <button type="submit" class="btn btn-primary w-50 -71 fw-bold">Login</button>

            <div class="col-12">
                <p class="small mb-0">Belum Punya Akun ? <a href="/register">Buat Akun</a></p>
            </div>
            {{-- <p><a href="/forgot-password" class="text-decoration-none" style="color: #000000">Lupa Kata Sandi?</a></p> --}}
</a>
        </form>
        {{-- end of form login --}}

        <p>Atau Login Menggunakan</p>
        <div>
            <img src="{{ asset('image/google.png') }}" alt="Image" class="img-fluid">
            <img src="{{ asset('image/phone.png') }}" alt="Image" class="img-fluid"> 
        </div>
        <img src="{{ asset('image/MedCall.png') }}" alt="Image" class="img-fluid">
    </div>
    </div>
    
</div>

@endsection
