<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = [
            ['kode' => 'A001', 'nama' => 'Knalpot', 'kategori' => 'Peralatan Otomotif', 'harga' => 1500000, 'stok' => 10],
            ['kode' => 'A002', 'nama' => 'Radiator', 'kategori' => 'Peralatan Otomotif', 'harga' => 2500000, 'stok' => 8],
            ['kode' => 'A003', 'nama' => 'Oli Mesin', 'kategori' => 'Peralatan Otomotif', 'harga' => 300000, 'stok' => 25],
            ['kode' => 'A004', 'nama' => 'Ban Mobil', 'kategori' => 'Peralatan Otomotif', 'harga' => 1200000, 'stok' => 15],
            ['kode' => 'A005', 'nama' => 'Aki Mobil', 'kategori' => 'Peralatan Otomotif', 'harga' => 2000000, 'stok' => 5],
            ['kode' => 'A006', 'nama' => 'Kampas Rem', 'kategori' => 'Suku Cadang', 'harga' => 350000, 'stok' => 30],  // Spare Part
            ['kode' => 'A007', 'nama' => 'Lampu Mobil', 'kategori' => 'Peralatan Otomotif', 'harga' => 500000, 'stok' => 12],
            ['kode' => 'A008', 'nama' => 'Filter Udara', 'kategori' => 'Suku Cadang', 'harga' => 120000, 'stok' => 40],  // Spare Part
            ['kode' => 'A009', 'nama' => 'Kunci Mobil', 'kategori' => 'Peralatan Otomotif', 'harga' => 250000, 'stok' => 20],
            ['kode' => 'A010', 'nama' => 'Spoiler Mobil', 'kategori' => 'Peralatan Otomotif', 'harga' => 800000, 'stok' => 10],
        ];

        return view('barang.index', compact('barang'));
    }
}
