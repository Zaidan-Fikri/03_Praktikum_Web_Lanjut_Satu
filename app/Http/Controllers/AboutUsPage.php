<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsPage extends Controller
{
    public function about(){
        return view("about-us", ["judul" => "About"]);
    }
}
