<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengingat Janji Konsultasi</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<div class="container">

  <h1>Pengingat Janji Konsultasi</h1>

  <div class="row">

    <div class="col-md-6">

      <div class="card">
        <div class="card-header">
          Kalender Konsultasi
        </div>
        <div class="card-body">

          <div id="calendar"></div>

        </div>
      </div>

    </div>

    <div class="col-md-6">

      <div class="card">
        <div class="card-header">
          Notes Pengingat
        </div>
        <div class="card-body">

          <p>
            Tanggal 24 Desember 2024, Anda memiliki janji konsultasi dengan dr. Suktomo.
          </p>

        </div>
      </div>

    </div>

  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script>

$(document).ready(function() {

  // Initialize the calendar
  var calendar = new FullCalendar.Calendar(document.getElementById('calendar'), {
    locale: 'id',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    defaultView: 'month',
    events: [
      {
        title: 'Konsultasi dengan dr. Suktomo',
        start: moment('2024-12-24', 'YYYY-MM-DD'),
        end: moment('2024-12-24', 'YYYY-MM-DD') + 'T10:00:00'
      }
    ]
  });

  // Add notes pengingat
  calendar.on('eventClick', function(event) {
    if (event.title === 'Konsultasi dengan dr. Suktomo') {
      alert('Tanggal ' + event.start.format('DD MMMM YYYY') + ', Anda memiliki janji konsultasi dengan dr. Suktomo.');
    }
  });

  // Render the calendar
  calendar.render();

});

</script>

</body>
</html>
