@extends('layouts.app')

@section('content')
<div class="container">
    <div>

    </div>
    <div>
        <p>Silakan Masukkan Alamat Email, Kata Sandi dan Nomor Kartu Pengobatan Anda</p>
        <form action="#">
            <input type="email" name="email" placeholder="Masukkan Alamat Email">
            <br>
            <input type="password" name="password" placeholder="Masukkan Kata Sandi">
            <br>
            <input type="text" name="card_number" placeholder="Masukkan Nomor Kartu">
            <br>
            <button type="submit" class="btn btn-primary">Login</button>
            <p><a href="/forgot-password" class="text-decoration-none">Lupa Kata Sandi?</a></p>

</a>

        </form>
        
        <p>Atau Login Menggunakan</p>
        <div>
            <img src="image.jpg" alt="Image" class="img-fluid">
        </div>
        <a href="#">MEDCALL</a>
    </div>
</div>

@endsection
