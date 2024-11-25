<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    use HasFactory;

    protected $table = 'kategori_barang';

    // Kolom yang bisa diisi secara langsung
    protected $fillable = ['nama'];

    /**
     * Relasi dengan model Barang.
     * Satu kategori dapat memiliki banyak barang.
     */
    public function barang()
    {
        return $this->hasMany(Barang::class, 'kategori_id');
    }
}
