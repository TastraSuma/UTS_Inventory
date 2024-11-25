<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';

    // Kolom yang bisa diisi secara langsung
    protected $fillable = ['kode_barang', 'nama_barang', 'kategori', 'tanggal', 'jumlah'];

    /**
     * Relasi opsional dengan Barang.
     * Jika diperlukan, tambahkan relasi berikut:
     */
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode');
    }
}
