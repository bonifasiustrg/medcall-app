<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pengingat Janji Konsultasi</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Pengingat Janji Konsultasi</h2>
  <div class="row">
    <div class="col-md-6">
      <!-- Kalender -->
      <div id="calendar"></div>
    </div>
    <div class="col-md-6">
      <!-- Notes Pengingat Janji -->
      <div class="card">
        <div class="card-header">
          Pengingat Janji Konsultasi
        </div>
        <div class="card-body">
          <p>Tanggal: 1 Desember 2024</p>
          <p>Dokter: Dr. Suktomo</p>
          <p>Deskripsi: Anda memiliki janji konsultasi dengan Dr. Suktomo pada tanggal 1 Desember 2024. Pastikan untuk hadir tepat waktu.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- FullCalendar JS and dependencies -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.10.2/main.css"/>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@5.10.2/main.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      events: [
        {
          title: 'Janji Konsultasi',
          start: '2024-12-01',
          description: 'Janji konsultasi dengan Dr. Suktomo'
        }
      ],
      eventClick: function(info) {
        // Menampilkan notes saat diklik
        alert('Deskripsi: ' + info.event.extendedProps.description);
      }
    });

    calendar.render();
  });
</script>

</body>
</html>
