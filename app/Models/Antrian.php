<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = "antrians";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'user_id', 'tanggal', 'jammasuk', 'jamkeluar'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
