@extends('layouts.app')

@section('content')
<div class="container">
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Styled Bootstrap Calendar</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css"/>
        <style>
            /* Tambahkan gaya CSS sesuai kebutuhan Anda */
            body {
                font-family: 'Lato', sans-serif;
                background-color: #EFF5FF;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
            }

            .container {
                margin-top: 50px;
                text-align: center;
            }

            #calendar {
                max-width: 400px;
                background-color: #add8e6; /* Warna biru muda */
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin: 0 auto;
            }

            .fc-event {
                cursor: pointer;
            }

            .fc-highlight {
                background-color: #87CEEB; /* Warna highlight yang sesuai */
                opacity: 0.8;
            }

            /* Menambahkan desain untuk modal */
            .modal-content {
                background-color: #f0f8ff; /* Warna biru muda untuk modal */
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .modal-header {
                background-color: #87CEEB; /* Warna header modal */
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

            /* Menambahkan desain untuk tombol tutup modal */
            .close {
                color: #fff;
                opacity: 1;
            }

            .close:hover {
                color: #fff;
                opacity: 0.8;
            }
        </style>

        <!-- Menambahkan font Lato dari Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap">
    </head>
    <body>

<<<<<<< HEAD
    <div class="container">
=======
        .fc-highlight {
            background-color: #ffeeba;
            opacity: 0.8;
        }
    </style>
    <!-- Menambahkan font Lato dari Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap">
</head>
<body>
    <div class="container-fluid">
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ff5eca9553f7f163ea0e9ea7b98f8588c5152711
=======
>>>>>>> 8d7a4e64f1d5dafb39dda78f2bbc652fdbcafdd6
=======
>>>>>>> 8d7a4e64f1d5dafb39dda78f2bbc652fdbcafdd6
        <div id="calendar"></div>
    </div>

    <!-- Modal untuk Detail Konsultasi -->
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
            $('#calendar').fullCalendar({
                events: [
                    {
                        title: 'Konsultasi Dr. Suktomo',
                        start: '2023-11-25',
                        description: 'Konsultasi dengan Dr. Suktomo pada 25 November 2023'
                    },
                    {
                        title: 'Konsultasi Dr. Hasanudin',
                        start: '2023-11-27',
                        description: 'Konsultasi dengan Dr. Hasanudin pada 27 November 2023'
                    },
                    {
                        title: 'Konsultasi Dr. Kartika Santi',
                        start: '2023-11-28',
                        description: 'Konsultasi dengan Dr. Kartika Santi pada 28 November 2023'
                    }
                ],
                eventRender: function(event, element) {
                    element.attr('title', event.description);
                },
                dayRender: function(date, cell) {
                    if (date.format() === '2023-11-25' || date.format() === '2023-11-27' || date.format() === '2023-11-28') {
                        cell.addClass('fc-highlight');
                    }
                },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                dayClick: function(date, jsEvent, view) {
                    if (date.format() === '2023-11-25' || date.format() === '2023-11-27' || date.format() === '2023-11-28') {
                        $('#event-description').text('Konsultasi pada ' + date.format('D MMMM YYYY'));
                        $('#eventModal').modal('show');
                    }
                }
            });
        });
    </script>
    </body>
    </html>
</div>

@endsection
