<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Appointment;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

// app/Http/Controllers/YourController.php



class FormController extends Controller
{
    public function selesaidaftar(Request $request)
    {

            // Validate the form data
            $validatedData = $request->validate([
                'nama' => 'required|string|max:255',
                'poli' => 'required|string',
                'tanggal' => 'required|date',
                'dokter' => 'required|string',
            ]);
    
            // Perform some action with the validated form data
            // For example, store it in the database
            // Note: This is a basic example, and you might want to customize this based on your application's needs
    
            // Assuming you have a model called Appointment to represent appointments
            $appointment = new Appointment([
                'nama' => $request->input('nama'),
                'poli' => $request->input('poli'),
                'tanggal' => $request->input('tanggal'),
                'dokter' => $request->input('dokter'),
            ]);
    
            // Save the appointment
            $appointment->save();

        return view('selesaidaftar'); // Replace 'selesaidaftar' with your actual view
    }
}
