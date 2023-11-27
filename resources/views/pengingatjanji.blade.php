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
</head>
<body>
    <div class="container">
        <div id="calendar"></div>
    </div>

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
