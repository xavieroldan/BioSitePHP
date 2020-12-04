<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeText;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{       
    public function index()
    {
         $home_texts = DB::table('home_texts')
         ->inRandomOrder()
         ->limit(1)
         ->get();
         return view('index', compact('home_texts'));
    }
}
