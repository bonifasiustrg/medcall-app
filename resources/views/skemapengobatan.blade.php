<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedCall</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Form Pendaftaran Pengobatan</h2>
        <form>
            <div class="form-group">
                <label for="nama">Nama*</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Bagus Safutra">
            </div>
            <div class="form-group">
                <label for="poli">Pilih Poli*</label>
                <select class="form-control" id="poli" name="poli">
                    <option>Poli Penyakit dalam</option>
                    <!-- Tambahkan opsi lainnya di sini -->
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Konsultasi*</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="form-group">
                <label for="dokter">Pilih Dokter*</label>
                <select class="form-control" id="dokter" name="dokter">
                    <option>dr. Indra Perkasa</option>
                    <!-- Tambahkan opsi lainnya di sini -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
    <nav class="navbar fixed-bottom navbar-light bg-primary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar Bagian Bawah</a>
        </div>
    </nav>
</body>
</html>