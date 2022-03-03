<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsPage extends Controller
{
    public function index($params = null){
        if ($params != null){
            return view("news", ["judul" => "News", "berita" => "$params"]);
        }
    }
}
