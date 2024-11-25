<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = [
            ['kode_barang' => 'A001', 'nama_barang' => 'Knalpot', 'kategori' => 'Peralatan Otomotif', 'tanggal' => '2024-11-25', 'jumlah' => 3],
            ['kode_barang' => 'A002', 'nama_barang' => 'Radiator', 'kategori' => 'Peralatan Otomotif', 'tanggal' => '2024-11-26', 'jumlah' => 2],
            ['kode_barang' => 'A003', 'nama_barang' => 'Oli Mesin', 'kategori' => 'Peralatan Otomotif', 'tanggal' => '2024-11-27', 'jumlah' => 5],
            ['kode_barang' => 'A004', 'nama_barang' => 'Ban Mobil', 'kategori' => 'Peralatan Otomotif', 'tanggal' => '2024-11-28', 'jumlah' => 4],
            ['kode_barang' => 'A005', 'nama_barang' => 'Aki Mobil', 'kategori' => 'Peralatan Otomotif', 'tanggal' => '2024-11-29', 'jumlah' => 3],
            ['kode_barang' => 'A006', 'nama_barang' => 'Kampas Rem', 'kategori' => 'Suku Cadang', 'tanggal' => '2024-11-30', 'jumlah' => 8],  // Spare Part
            ['kode_barang' => 'A007', 'nama_barang' => 'Lampu Mobil', 'kategori' => 'Peralatan Otomotif', 'tanggal' => '2024-12-01', 'jumlah' => 1],
            ['kode_barang' => 'A008', 'nama_barang' => 'Filter Udara', 'kategori' => 'Suku Cadang', 'tanggal' => '2024-12-02', 'jumlah' => 6],  // Spare Part
            ['kode_barang' => 'A009', 'nama_barang' => 'Kunci Mobil', 'kategori' => 'Peralatan Otomotif', 'tanggal' => '2024-12-03', 'jumlah' => 2],
            ['kode_barang' => 'A010', 'nama_barang' => 'Spoiler Mobil', 'kategori' => 'Peralatan Otomotif', 'tanggal' => '2024-12-04', 'jumlah' => 4],
        ];

        return view('laporan.index', compact('laporan'));
    }
}
