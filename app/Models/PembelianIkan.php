<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianIkan extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto_ikan', 'id_ikan', 'id_penjual', 'harga', 'tanggal_pembelian'
    ];

    public function jenisIkan() {
        return $this->belongsTo(Ikan::class, 'id_ikan');
    }
    public function namaPenjual() {
        return $this->belongsTo(Penjual::class, 'id_penjual');
    }
}
