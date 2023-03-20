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

Route::get('/', function () {
    return view('welcome');
});

//cara membuat Router
Route::get('/halo', function () {
    return'Hallo Semua';
});

Route::get('/halo2', function () {
    return'<h1>Hallo Semua</h1>';
});

Route::get('/halo3', function () {
    return"<h1>Hallo Semua, Selamat Siang</h1>";
});

 Route::get('/halo/(nama?)', function ($nama) {
    echo"<h1>Hallo $nama</h1>";
 });

 Route::get('/mahasiswa/{nama?}', function ($nama = 'Jumhari') {
    echo "<h1>Halo $nama </h1>";
});

 Route::get('/mahasiswa2/{nama?}/{jurusan?}', function ($nama = 'Jumhari', $jurusan = 'Informatika') {
    echo "<h1>nama = $nama</h1>";
    echo "<h1>jurusan = $jurusan</h1>";
});

 Route::get('/mahasiswa3/{nama?}/{jurusan?}', function ($nama = 'Jumhari', $jurusan = 'Informatika') {
    echo "<h1>nama = $nama</h1>";
    echo "<h1>jurusan = $jurusan</h1>";
})->where('nama','[A-Z]');

Route::get('/hubungi' , function (){
    echo "<h1>Hubungi Kami</h1>";
})->name('call');

Route::get('/halo' , function (){
   return "<a href='".route('call')."'>'.route('call').'</a>"; 
});

Route::get('/halo2' , function (){
   return "<a href='".route('call')."'>contoh 2</a>"; 
});



//Route Group
// Route::get('/mhs/nama' function() {
//     return "<h2>nama</h2>";
// });

// Route::get('/mhs/jurusan' function() {
//     return "<h2>jurusan</h2>"; 
// });

Route::prefix("/mhs")->group(function() {
    Route::get("/nama", function() {
        return "<h2>nama</h2>";
    });
    Route::get('/jurusan', function() {
        return "<h2>jurusan</h2>";
    });
});

//new //get, post,oatch, delete
Route::get("/profil/{nama?}", function($nama = "Jumhari"){
    return view("profil", ['namaMahasiswa' => $nama]); //optional 1
});






