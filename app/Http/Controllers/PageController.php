<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $user = User::all();
        return view('halaman',compact('user','nomor'));
    }
}
