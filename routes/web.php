<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\ProductsPage;
use App\Http\Controllers\NewsPage;
use App\Http\Controllers\ProgramPage;
use App\Http\Controllers\AboutUsPage;
use App\Http\Controllers\ContactUsPage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Home
route::get('/', [HomePage::class, 'index']);

// Halaman Products
route::prefix('produk')->group(function(){
    route::get('/produk1', [ProductsPage::class, 'produk1']);
});

// Halaman News
Route::get("/news/{params?}", [NewsPage::class, 'index']);

// Halaman Program
route::prefix('program')->group(function(){
    route::get('/program1', [ProgramPage::class, 'program1']);
});

// Halaman About Us
route::get('/about', [AboutUsPage::class, 'about']);

// Halaman Contact Us
Route::resource('/contact', ContactUsPage::class, [
    'only' => ['index', 'profile', 'address']
]);