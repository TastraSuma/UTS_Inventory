<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['username' => 'andrea_m', 'nama' => 'Andrea', 'email' => 'andrea_martin@gmail.com'],
            ['username' => 'budi_s', 'nama' => 'Budi', 'email' => 'budi_santoso@yahoo.com'],
            ['username' => 'clara_p', 'nama' => 'Clara', 'email' => 'clara.pratama@hotmail.com'],
            ['username' => 'daniel_t', 'nama' => 'Daniel', 'email' => 'daniel.tanaka@gmail.com'],
            ['username' => 'elisa_w', 'nama' => 'Elisa', 'email' => 'elisa.widya@gmail.com'],
            ['username' => 'fahri_h', 'nama' => 'Fahri', 'email' => 'fahri_hermawan@gmail.com'],
            ['username' => 'gita_s', 'nama' => 'Gita', 'email' => 'gita.sulistyo@gmail.com'],
            ['username' => 'hendra_j', 'nama' => 'Hendra', 'email' => 'hendra.junaedi@yahoo.com'],
            ['username' => 'irfan_m', 'nama' => 'Irfan', 'email' => 'irfan_maulana@gmail.com'],
            ['username' => 'julia_k', 'nama' => 'Julia', 'email' => 'julia.kristina@gmail.com'],
            ['username' => 'kristian_w', 'nama' => 'Kristian', 'email' => 'kristian_wirawan@yahoo.com'],
            ['username' => 'lina_p', 'nama' => 'Lina', 'email' => 'lina.purnama@gmail.com'],
            ['username' => 'michael_y', 'nama' => 'Michael', 'email' => 'michael_yanto@yahoo.com'],
            ['username' => 'nadya_t', 'nama' => 'Nadya', 'email' => 'nadya_tan@gmai.com'],
            ['username' => 'olga_s', 'nama' => 'Olga', 'email' => 'olga_sutrisno@gmail.com'],
        ];

        return view('users.index', compact('users'));
    }
    //
}
