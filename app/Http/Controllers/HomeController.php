<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_sekolah' => 'SMA',
            'alamat' => 'Tegal'
        ];
        return view ('v_home', $data);
    }

    public function about($id)
    {
        return 'Ini Halaman About <br>' . $id;
    }
}