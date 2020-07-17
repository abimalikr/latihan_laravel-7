<?php

use Illuminate\Support\Facades\Route;

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

// 4.

// Route::get('/', function () {
//     $name = "<h1> Abi
//     Malik
//     Rasnadipoetra </h1>";
//     return view('latihan',['panggil' => $name]);
// });

// // Route::get('/contact', function () {
// //     return 'contact us.';
// // });

// Route::view('/contact','contact'); //ini kalo mau manggil contact.blade.php di folder views

// Route::view('/series/create','series.premium.create');
// Route::view('/series/show','series.premium.show');

// 5, 6

route::get('/', function () {
    return view('5BelajarBlade.home');
});
route::get('5BelajarBlade.contact', function () {
    return view('5BelajarBlade/contact');
});
route::get('5BelajarBlade.about', function () {
    return view('5BelajarBlade/about');
});
route::get('5BelajarBlade.login', function () {
    return view('5BelajarBlade/login');
});


