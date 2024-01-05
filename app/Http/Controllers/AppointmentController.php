<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    // Menampilkan semua janji temu
    public function index()
    {
        $appointments = Appointment::all();
    return view('/pengingatjanji', ['appointments' => $appointments]);
    }

    // Menampilkan formulir untuk membuat janji temu baru
    public function create()
    {
        return view('appointments.create');
    }

    // Menyimpan janji temu baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'poli' => 'required',
            'tanggal' => 'required|date',
            'dokter' => 'required',
        ]);

        $appointment = Appointment::create($validatedData);

        return redirect('/appointments')->with('success', 'Janji temu berhasil dibuat.');
    }

    // Menampilkan detail janji temu
    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointments.show', ['appointment' => $appointment]);
    }

    // Menampilkan formulir untuk mengedit janji temu
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointments.edit', ['appointment' => $appointment]);
    }

    // Menyimpan perubahan pada janji temu ke database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'poli' => 'required',
            'tanggal' => 'required|date',
            'dokter' => 'required',
        ]);

        Appointment::whereId($id)->update($validatedData);

        return redirect('/appointments')->with('success', 'Janji temu berhasil diperbarui.');
    }

    // Menghapus janji temu dari database
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect('/appointments')->with('success', 'Janji temu berhasil dihapus.');
    }
}
