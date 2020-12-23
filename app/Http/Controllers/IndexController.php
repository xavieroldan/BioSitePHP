<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeText;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{      
    public function index()
    {
        $text="default";
        $home_texts = DB::table('home_texts')
         ->inRandomOrder()
         ->limit(1)
         ->get();
        if (count($home_texts) >= 1)
        {
            $text=$home_texts[0]->text;
        }         
        return view('index', compact('text'));
    }
}
