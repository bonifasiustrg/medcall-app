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
  </style>
</head>
<body>

  <!-- Navbar atas -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-atas">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MEDCALL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pencarian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Akun</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Formulir -->
  <div class="container">
    <h2>Form Pendaftaran Pengobatan</h2>
    <form>
        <div class="form-group">
            <label for="nama">Nama*</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda">
        </div>
        <div class="form-group">
            <label for="poli">Pilih Poli*</label>
            <select class="form-control" id="poli" name="poli" onchange="updateDokterOptions()">
                <option>Poli Umum</option>
                <option>Poli Gigi dan Mulut</option>
                <option>Poli Penyakit Dalam</option>
                <option>Poli Jiwa</option>
                <option>Poli Mata</option>
                <!-- Tambahkan opsi lainnya di sini -->
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Konsultasi*</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="form-group">
            <label for="dokter">Pilih Dokter*</label>
            <select class="form-control" id="dokter" name="dokter" placeholder="Masukkan Nama Lengkap Anda">
                <!-- Opsi dokter akan diperbarui dengan JavaScript -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
  </div>

  <!-- Navbar pada bagian bawah -->
  <nav class="navbar fixed-bottom navbar-light" style="background-color: #527BC0;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
    </div>
  </nav>

  <script>
    function updateDokterOptions() {
      var poliSelect = document.getElementById('poli');
      var dokterSelect = document.getElementById('dokter');
      
      // Kosongkan opsi dokter terlebih dahulu
      dokterSelect.innerHTML = "Masukkan Nama Lengkap Anda";

      // Tambahkan opsi dokter berdasarkan pilihan poli
      if (poliSelect.value === "Poli Penyakit Dalam") {
        var dokters = ["dr. A", "dr. B", "dr. C"];
      } else if (poliSelect.value === "Poli Gigi dan Mulut") {
        var dokters = ["dr. D", "dr. E", "dr. F"];
      } else {
        // Tambahkan logika untuk poli lain jika diperlukan
        var dokters = [];
      }

      for (var i = 0; i < dokters.length; i++) {
        var option = document.createElement('option');
        option.value = dokters[i];
        option.text = dokters[i];
        dokterSelect.appendChild(option);
      }
    }

    // Panggil fungsi saat halaman dimuat
    window.onload = updateDokterOptions;
  </script>

</body>
</html>
