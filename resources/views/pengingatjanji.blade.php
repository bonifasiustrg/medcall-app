@extends('layouts.app')

@section('content')

<!-- Add this script inside the <script> tag in pengingatjanji.blade.php -->
<script>
    $(document).ready(function() {
        // Your existing script to initialize FullCalendar

        // Load consultations from the server and render them on the calendar
        $.ajax({
            url: '/get-consultations', // Adjust the endpoint as needed
            method: 'GET',
            success: function(response) {
                renderConsultations(response);
            },
            error: function(error) {
                console.error('Error fetching consultations:', error);
            }
        });

        function renderConsultations(consultations) {
            // Loop through each consultation and render it on the calendar
            consultations.forEach(function(consultation) {
                $('#calendar').fullCalendar('renderEvent', {
                    title: consultation.nama,
                    start: consultation.tanggal,
                    description: 'Konsultasi dengan ' + consultation.dokter + ' pada ' + consultation.tanggal,
                }, true);
            });
        }
    });
</script>


@endsection