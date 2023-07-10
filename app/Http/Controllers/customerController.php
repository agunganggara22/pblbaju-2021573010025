<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tb_customer;
class customerController extends Controller
{
    public function show()
    {
        $customer = Tb_customer::all();
        return view('customer', compact('customer'));
    }
}
