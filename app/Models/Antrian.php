<?php

namespace App\Models;

use App\Models\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = "antrians";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'user_id', 'tanggal', 'waktuambiltiket', 'waktugiliran', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
