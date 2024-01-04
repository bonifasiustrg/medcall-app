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

    .product{
        overflow: hidden;
        background: #ffffff;
        text-align: center;
        width: 30vw;
        height: 400px;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 1.2rem;
        margin: 2rem;
        background: #D6E6FF;
    }


    .product2 {
        overflow: hidden;
        color: #21201e;
        text-align: center;
        width: 30vw;
        height: 400px;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 2px dashed #527BC0;
        border-radius: 32px;
        margin: 2rem;
    }
    .content {
        width: 100vw;
        position: relative;
        align-items: center;
        justify-content: center;
        /* Untuk mengatur tinggi seukuran layar, Anda bisa menggunakan 100vh (100% dari viewport height) */
        height: 80vh;
        padding: 20px;
        display: flex; /* Menjadikan container sebagai flex container */
    }    

    .content div {
        margin: auto; /* Memposisikan elemen di tengah secara horizontal dan vertikal */

        margin-right: 30px;
        margin-left: 30px;
    }

    .card-body {
        border-radius: 32px;
        background: #ABCAF9;
        margin: 32px;
    }
    .card-title {
        color: #527BC0;
        font-size: 32px;
        font-weight: 800;
    }

    h5 {
        color: #527BC0;
        font-weight: 600;
    }

    .card-body p{
        font-size: 64px;
        color: #ffffff;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);   
    }
    .card {
        background: transparent;
    }
    </style>
</head>
<body>
    <div class="content">
        <div class="row">
            < class="product col-lg-6" style="padding: 0 5px;">
                < class="card">
                    <h2 class="card-title">Antrian Saat Ini</h2>
                    <div class="card-body" style="margin-bottom: 48px">
                        <p class="card-text">
                            @php
                            $antrianAktif = \App\Models\Antrian::where('status', 'aktif')->first();
                            $antrianId = $antrianAktif ? $antrianAktif->id : null;
                            @endphp
                            {{ $antrianId ? '' . $antrianId : 'Tidak ada Antrian aktif saat ini.' }}
                            

                        </p>
                    </div>
                    {{-- <h5 class="card-text">Rabu, 25 Okt 2023</h5> --}}
                    <h5 class="card-text">{{ \Carbon\Carbon::now()->format('l, d M Y') }}</h5>
                    <h5 class="card-text">12.4gn n;gt
            <div class="product2 col-lg-6" style="padding: 5px 0;">
                <div class="card">
                    <h2 class="card-title">Antrian Anda</h2>
                    <div class="card-body" style="margin-bottom: 48px">
                        <p class="card-text">
                            @php
                            $user = Auth::user();
                            $antrianAktif = \App\Models\Antrian::where('user_id', $user->id)->where('status', 'nonaktif')->first();
                            $antrianId = $antrianAktif ? $antrianAktif->id : null;
                            @endphp
                            {{ $antrianId ? '' . $antrianId : 'Anda tidak punya No Antrian' }}

                        </p>
                    </div>

                    {{-- <h5 class="card-text">Rabu, 25 Okt 2023</h5> --}}
                    <h5 class="card-text">{{ \Carbon\Carbon::now()->format('l, d M Y') }}</h5>
                    <h5 class="card-text">12.40 - 13.00WIB</h5>
                    <p class="card-text" style="color: #527BC0; font-weight: 400;">Harap datang 10 menit sebelum<br> jadwal Anda </p>
                </div>
            </div>
        </div>
    </div>
</body>

<footer class="footer">
    <img src="{{ asset('image/Rectangle 4213.png') }}" alt="Image" class="img-fluid w-100">
</footer>

@endsection