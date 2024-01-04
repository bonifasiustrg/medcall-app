<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function index()
    {
        return view('pengingatjanji');
    }

    public function create()
    {
        $data = request()->validate([
            'nama' => 'required',
            'poli' => 'required',
            'tanggal' => 'required|date',
            'dokter' => 'required',
        ]);

        $appointment = Appointment::create($data);

        return response()->json($appointment);
    }

    public function getAppointments()
    {
        $appointments = Appointment::all();

        $events = [];

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'Konsultasi dengan ' . $appointment->dokter . ' (' . $appointment->poli . ')',
                'start' => $appointment->tanggal,
                'className' => 'reminder-day',
            ];
        }

        return response()->json($events);
    }
}
