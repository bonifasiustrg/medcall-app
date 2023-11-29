@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
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
            max-height: 600px; /* Set max-height to limit the calendar height */
            margin: 0 auto;
            background-color: #87CEEB; /* Light blue color */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Other styles remain the same */
    </style>
</head>
<body>
    <div class="container">
        <div id="calendar"></div>
    </div>

    <!-- Modal and scripts remain the same -->

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
                eventClick: function(event, jsEvent, view) {
                    $('#eventModalLabel').html(event.title);
                    $('#event-description').html(event.description);
                    $('#eventModal').modal();
                }
            });
        });
    </script>
</body>
</html>

@endsection
