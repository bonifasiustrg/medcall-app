@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row align-items-start">
    <div class="col">
        <img src="https://picsum.photos/seed/picsum/200/300" alt="" class="img-fluid w-100">
    </div>
    <div class="col">
        <h1 class="text-center", style="color: #2771CA">Selamat Datang!</h1>
        <p class="text-center", style="color: #555568">Silakan Masukkan Alamat Email, Kata Sandi dan Nomor Kartu Pengobatan Anda</p>
        <form action="#">

        <div class="form-group">
        <label for="email" style="color: #2771CA; font-size: 14px;" class="fw-bold">Email*</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan Alamat Email">

        <label for="password" style="color: #2771CA; font-size: 14px;" class="fw-bold">Password*</label>
        <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan Kata Sandi">
        </div>

            <span style="color: #2771CA; font-size: 14px;" class="fw-bold">Password*</span><br>
            <input type="password" name="password" placeholder="Masukkan Kata Sandi">
            <br>
            <span style="color: #2771CA; font-size: 14px;" class="fw-bold">Nomor Kartu*</span><br>
            <input type="text" name="card_number" placeholder="Masukkan Nomor Kartu">
            <br>
            <button type="submit" class="btn btn-primary" class="fw-bold" style="#2771CA">Login</button>
            <p><a href="/forgot-password" class="text-decoration-none" style="color: #000000">Lupa Kata Sandi?</a></p>
</a>
        </form>
        
        <p>Atau Login Menggunakan</p>
        <div>
            <img src="image.jpg" alt="Image" class="img-fluid">
        </div>
        <a href="#">MEDCALL</a>
    </div>
    </div>
    
</div>

@endsection
