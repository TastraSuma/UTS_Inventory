<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index()
    {
        $categories = [
            ['nama' => 'Peralatan Otomotif'],  // Automotive Equipment
            ['nama' => 'Aksesoris Mobil'],    // Car Accessories
            ['nama' => 'Suku Cadang'],        // Spare Parts
            ['nama' => 'Perawatan Mobil'],    // Car Maintenance
        ];

        return view('kategori.index', compact('categories'));
    }
}
