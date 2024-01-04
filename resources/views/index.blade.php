<!-- resources/views/appointments/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>List of Appointments</h2>

        <ul>
            @foreach ($appointments as $appointment)
                <li>{{ $appointment->nama }} - {{ $appointment->poli }} - {{ $appointment->tanggal }} - {{ $appointment->dokter }}</li>
            @endforeach
        </ul>
    </div>
@endsection
