<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsPage extends Controller
{
    public function produk1(){
        return view("product", ["judul" => "Produk", "produk" => "Produk 1"]);
    }
}
