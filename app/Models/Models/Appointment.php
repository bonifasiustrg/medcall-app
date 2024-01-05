<?php

namespace App\Models\Models;

use App\Models\Antrian;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['nama', 'poli', 'tanggal', 'dokter'];

    public function antrian()
    {
        return $this->hasOne(Antrian::class);
    }
}
