<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function saveConsultation(Request $request)
    {
        // Your logic to save consultation data to the database
        $consultation = [
            'title' => $request->input('nama'),
            'start' => $request->input('tanggal'),
            'description' => 'Konsultasi dengan ' . $request->input('dokter') . ' pada ' . $request->input('tanggal'),
        ];

        // Save consultation to the database or any other storage mechanism

        return response()->json($consultation);
    }
}
