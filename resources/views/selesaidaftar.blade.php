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
        <!-- Tambahkan ini di dalam tag <body> -->
        <div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Pengambilan Antrian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin mengambil antrian?</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="setujuCheckbox">
                            <label class="form-check-label" for="setujuCheckbox">Saya menyetujui ketentuan untuk mengambil antrian.</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="setujuBtn">Setuju</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-container">
            <div class="image-container">
                <img src="{{ asset('image/selesaidaftar.png') }}" alt="Gambar contoh" class="rounded" style="width: 600px; height: 450px;">
            </div>
            <div class="text-box">
                <p>Selamat! Data Anda sudah tersimpan. <br> Silakan klik "Ambil Antrian" untuk mengambil antrian Anda.</p>
            </div>

            {{-- <a class="btn btn-primary" href="/home">Kembali</a> --}}

            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#konfirmasiModal">Ambil Antrian</a>


            <script>
                document.getElementById('setujuBtn').addEventListener('click', function () {
                    // Periksa apakah checkbox persetujuan dicentang
                    var checkbox = document.getElementById('setujuCheckbox');
                    if (checkbox.checked) {
                        // Redirect ke halaman antrian
                        window.location.href = "/antrian";
                    } else {
                        // Tampilkan pesan kesalahan atau tindakan lain sesuai kebutuhan
                        alert("Anda harus menyetujui ketentuan untuk mengambil antrian.");
                    }
                });
            </script>
        </div>
    </html>
</div>
@endsection
