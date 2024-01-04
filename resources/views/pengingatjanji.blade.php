@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Tambahkan link CSS Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Tambahkan link CSS FullCalendar -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
  <style>
    /* Gaya khusus untuk tanggal pengingat janji */
    .reminder-day {
      background-color: #87CEFA; /* Warna biru muda */
      color: #fff;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Kalender Pengingat Janji Klinik</h2>
  <div id="reminder-calendar"></div>
</div>

<!-- Tambahkan link JavaScript Bootstrap dan jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Tambahkan link JavaScript FullCalendar -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('reminder-calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      // Menambahkan event click pada tanggal
      dateClick: function(info) {
        var selectedDate = info.dateStr;
        var eventTitle = 'Konsultasi dengan dokter...'; // Ganti dengan dokter yang sesuai

        // Menampilkan notifikasi
        alert(eventTitle + ' pada tanggal ' + selectedDate);

        // Highlight tanggal yang dipilih
        calendar.addEvent({
          title: eventTitle,
          start: selectedDate,
          className: 'reminder-day'
        });
      },
      events: [
        {
          title: 'Konsultasi Poli Umum',
          start: '2023-12-06',
          className: 'reminder-day'
        }
        // ... Event lainnya ...
      ]
    });

    calendar.render();
  });
</script>

</body>
</html>

@endsection
