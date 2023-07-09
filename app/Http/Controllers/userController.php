<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tb_user;

class userController extends Controller
{
    public function show()
    {
        $user = Tb_user::all();
        return view('user', compact('user'));
    }
}
