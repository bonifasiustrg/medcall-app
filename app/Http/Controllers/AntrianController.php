<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('antrian.AntrianAdmin');
            // Ambil antrian saat ini dengan status 'aktif'
        $antrianSaatIni = Antrian::where('status', 'aktif')->first();

        // Ambil antrian user yang sedang login
        $antrianAnda = Antrian::where([
            ['user_id', '=', auth()->user()->id],
            ['status', '=', 'aktif'],
        ])->first();

        // Kirim data ke view
        return view('antrian.AntrianAdmin', compact('antrianSaatIni', 'antrianAnda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $antrianSaatIni = Antrian::where('status', 'aktif')->first();

        // Ambil antrian user yang sedang login
        $antrianAnda = Antrian::where([
            ['user_id', '=', auth()->user()->id],
            ['status', '=', 'aktif'],
        ])->first();

        // Kirim data ke view
        return view('antrian', compact('antrianSaatIni', 'antrianAnda'));
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

        // // Cek apakah nomor antrian pertama kali dibuat hari ini
        // $firstQueueToday = Antrian::where([
        //     ['user_id', '=', auth()->user()->id],
        //     ['tanggal', '=', $tanggal],
        // ])->first();

        $antrian = Antrian::where([
            ['user_id','=',auth()->user()->id],
            ['tanggal','=',$tanggal],
            ['status','!=','done']
        ])->first()/* ->update(['status' => 'nonaktif']) */;

        
        if ($antrian) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('antrian'); // Ganti 'dashboard' dengan nama route admin
            } elseif (auth()->user()->role == 'pasien') {
                return redirect()->route('antrianpage'); // Ganti 'noantrian' dengan nama route user
            }
            // dd($antrian->toArray()); //menampilkan response
        } else {
            Antrian::create([
                'user_id' => auth()->user()->id,
                'tanggal' => $tanggal,
                'waktuambiltiket' => $localtime,
                'waktugiliran' => $localtime,
            ]);

            if (auth()->user()->role == 'admin') {
                return redirect()->route('antrian'); // Ganti 'dashboard' dengan nama route admin
            } elseif (auth()->user()->role == 'pasien') {
                return redirect()->route('antrianpage'); // Ganti 'noantrian' dengan nama route user
            }
        }

        // return redirect('antrian-masuk');
    }


    /**
     * Mengubah status antrian menjadi aktif dan mengubah status antrian sebelumnya menjadi done
     */
    public function next_antrian()
    {
        // $antrian_aktif = $this->get_antrian_aktif();
        $antrian_aktif = Antrian::where('status', 'aktif')->first();
        $antrian_nonaktif =Antrian::where('status', 'nonaktif')->first();

        if (is_null($antrian_nonaktif)) {
            if ($antrian_aktif) {
                $antrian_aktif->status = "done";
                $antrian_aktif->save();
            }
            return redirect()->route('antrian');
        }

        if ($antrian_aktif) {
            $antrian_aktif->status = "done";
            $antrian_aktif->save();

            $antrian_berikutnya = Antrian::where([
                ['status', '=', 'nonaktif'],
                ['tanggal', '=', $antrian_aktif->tanggal],
            ])->orderBy('id', 'asc')->firstOrFail();

            if ($antrian_berikutnya) {
                $antrian_berikutnya->status = "aktif";
                $antrian_berikutnya->save();

                $this->antrian_aktif = $antrian_berikutnya;
            } else {
                throw new \Exception("Tidak ada antrian berikutnya"); // menampilkan response jika tidak ada antrian berikutnya
            }
            return redirect()->route('antrian');
        } else if (is_null($antrian_aktif)) {
            $antrian = Antrian::where('status', '=', 'nonaktif')->orderBy('id', 'asc')->firstOrFail();

            if ($antrian) {
                $antrian->status = "aktif";
                $antrian->save();
    
                $this->antrian_aktif = $antrian;
            } else {
                throw new \Exception("Tidak ada antrian dengan ID 1"); // menampilkan response jika tidak ada antrian dengan ID 1
            }

            return redirect()->route('antrian');

        } else {
            // return redirect()->route('antrian');
            dd("Gagal melanjutkan antrian"); //menampilkan response

        }
    }
    


        /**
     * Variabel untuk menyimpan antrian yang sedang aktif
     */
    private $antrian_aktif;

    /**
     * Mendapatkan antrian yang sedang aktif
     */
    public function get_antrian_aktif()
    {
        if ($this->antrian_aktif) {
            return $this->antrian_aktif;
        } else {
            return null;
        }
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
