<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramPage extends Controller
{
    public function program1(){
        return view("program", ["judul" => "Magang", "bagian" => "Magang"]);
    }
    public function program2(){
        return view("program", ["judul" => "Karir", "bagian" => "Karir"]);
    }
    public function program3(){
        return view("program", ["judul" => "Kunjungan Industri", "bagian" => "Kunjungan Industri"]);
    }
}
