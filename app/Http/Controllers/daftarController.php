<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tb_daftar;
class daftarController extends Controller
{
    public function show()
    {
        $daftar = Tb_daftar::all();
        return view('menu', compact('daftar'));
    }
}
