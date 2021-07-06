<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_penjual', 'jenis_kelamin', 'alamat', 'no_telp'
    ];
}
