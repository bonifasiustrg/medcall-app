<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('antrian.AntrianAdmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $antrian = Antrian::where([
            ['user_id','=',auth()->user()->id],
            ['tanggal','=',$tanggal],
        ])->first();

        if ($antrian) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('home'); // Ganti 'dashboard' dengan nama route admin
            } elseif (auth()->user()->role == 'pasien') {
                return redirect()->route('antrianpage'); // Ganti 'noantrian' dengan nama route user
            }
            // dd($antrian->toArray()); //menampilkan response
        } else {
            Antrian::create([
                'user_id' => auth()->user()->id,
                'tanggal' => $tanggal,
                'jammasuk' => $localtime,

            ]);
        }

        return redirect('antrian-masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
