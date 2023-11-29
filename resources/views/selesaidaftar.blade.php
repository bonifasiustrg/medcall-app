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

            .content-container {
                text-align: center;
                position: absolute;
                top: 250%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .image-container {
                margin-bottom: 20px;
            }

            .btn-primary {
                background-color: #527BC0;
            }
        </style>
    </head>
    <body>
        <div class="content-container">
            <div class="image-container">
                <img src="{{ asset('image/selesaidaftar.png') }}" alt="Gambar contoh" class="rounded" style="width: 600px; height: 450px;">
            </div>
            <div class="text-box">
                <p>Selamat! Data Anda sudah tersimpan. <br> Silakan melihat pada bagian antrian di menu utama.</p>
            </div>
            <button class="btn btn-primary">Kembali</button>
        </div>
    </body>
    </html>
</div>
@endsection
