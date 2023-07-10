<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tb_katbarang;
class katbarangController extends Controller
{
    public function show()
    {
        $katbarang = Tb_katbarang::all();
        return view('katmenu', compact('katbarang'));
    }
}
