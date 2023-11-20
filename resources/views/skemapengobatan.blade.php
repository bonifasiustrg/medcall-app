@extends('layouts.app')

@section('content')
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
@endsection
