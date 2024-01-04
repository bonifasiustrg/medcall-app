@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< Updated upstream
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
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Calendar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            text-align: center;
        }

        #calendar {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .fc-header-toolbar {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
            border: none;
        }

        .fc-button {
            background-color: #87CEEB; /* Light blue color */
            color: #fff;
            border: none;
        }

        .fc-button:hover {
            background-color: #5F9EA0; /* Slightly darker blue on hover */
        }

        .fc-button-active {
            background-color: #5F9EA0;
        }

        .fc-day-header {
            background-color: #f8f9fa;
            color: #495057;
        }

        .fc-day-number {
            color: #007bff;
        }

        .fc-today {
            background-color: #e6f7ff;
        }

        .fc-content {
            color: #343a40;
        }

        .fc-title {
            font-weight: bold;
        }

        .fc-event {
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 5px;
        }

        .fc-event:hover {
            background-color: #0056b3;
        }

        .modal-content {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            background-color: #007bff;
            border-bottom: none;
            color: #fff;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-footer {
            border-top: none;
            padding: 15px;
            border-radius: 0 0 10px 10px;
        }

        .close {
            color: #007bff;
        }

        .close:hover {
            color: #0056b3;
        }
    </style>
>>>>>>> Stashed changes
</head>
<body>

<<<<<<< Updated upstream
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

=======
    <!-- Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Detail Konsultasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="event-description"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <script>
    $(document).ready(function() {
        // Get the current date
        var currentDate = moment().format('YYYY-MM-DD');

        // Check if there's a consultation today
        var isConsultationToday = function(date) {
            var consultationDates = ['2023-11-25', '2023-11-27', '2023-11-28'];
            return consultationDates.includes(date);
        };

        // Display a notification if there's a consultation today
        if (isConsultationToday(currentDate)) {
            // You can customize the notification based on your needs
            alert('You have a consultation today!');
        }

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: [
                {
                    title: 'Konsultasi Dr. Suktomo',
                    start: '2023-11-25T14:00:00', // 2:00 PM
                    description: 'Konsultasi dengan Dr. Suktomo pada 25 November 2023 (Coming Soon)'
                },
                {
                    title: 'Konsultasi Dr. Hasanudin',
                    start: '2023-11-27T10:00:00', // 10:00 AM
                    description: 'Konsultasi dengan Dr. Hasanudin pada 27 November 2023 (Now)'
                },
                {
                    title: 'Konsultasi Dr. Kartika Santi',
                    start: '2023-11-28T19:00:00', // 7:00 PM
                    description: 'Konsultasi dengan Dr. Kartika Santi pada 28 November 2023 (Past)'
                }
            ],
            eventClick: function(event, jsEvent, view) {
                $('#eventModalLabel').html(event.title);
                $('#event-description').html(event.description);
                $('#eventModal').modal();
            },
            eventRender: function(event, element) {
                var html = '<span class="fc-title">' + event.title + '</span><br/>' +
                           '<span class="fc-time">' + moment(event.start).format('h:mm A') + '</span>';
                element.html(html);
            }
        });
    });
</script>
    </script>
>>>>>>> Stashed changes
</body>
</html>

@endsection
