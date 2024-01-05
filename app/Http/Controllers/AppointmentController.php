<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    // Menampilkan semua janji temu
    // app/Http/Controllers/AppointmentController.php

public function index()
{
    $appointments = Appointment::all();
    return view('appointments.index', ['appointments' => $appointments]);
}

}
