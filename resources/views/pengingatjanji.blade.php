<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Bootstrap Calendar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css"/>
    <style>
        body {
            font-family: 'Lato', sans-serif; /* Gunakan font Lato */
            background-color: #EFF5FF; /* Warna latar belakang */
        }

        .container {
            margin-top: 50px;
        }

        #calendar {
            max-width: 600px;
            float: left;
            margin-right: 20px; /* Jarak antara kalender dan notifikasi */
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #notification-box {
            width: 300px;
            float: left;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }

        .fc-event {
            cursor: pointer;
        }

        .fc-highlight {
            background-color: #ffeeba; /* Warna penyorotan tanggal konsultasi */
            opacity: 0.8;
        }
    </style>
    <!-- Menambahkan font Lato dari Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap">
</head>
<body>
    <div class="container">
        <div id="calendar"></div>
        <div id="notification-box">
            <h4>Notifikasi Konsultasi</h4>
            <ul>
                <li>Konsultasi dengan Dr. Suktomo pada 25 November 2023</li>
                <!-- Tambahkan notifikasi konsultasi lainnya di sini -->
            </ul>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                // Tambahkan opsi dan peristiwa Anda di sini
                events: [
                    {
                        title: 'Konsultasi Dr. Suktomo',
                        start: '2023-11-25', // Tanggal konsultasi
                        description: 'Konsultasi dengan Dr. Suktomo pada 25 November 2023'
                    }
                    // Anda dapat menambahkan peristiwa konsultasi lainnya di sini
                ],
                eventRender: function(event, element) {
                    element.attr('title', event.description);
                },
                dayRender: function(date, cell) {
                    if (date.format() === '2023-11-25') {
                        cell.addClass('fc-highlight'); // Menyoroti tanggal konsultasi
                    }
                },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                }
            });
        });
    </script>
</body>
</html>
