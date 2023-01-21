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

// Route::get('/', function () {   // default route
//     return view('welcome');
// });

// Route::get('/stok/{jenis?}/{merek?}',function($a='smartphone',$b='samsung'){

//      return "stok barang jenis $a yang bermerek $b sudah habis";
// });

// Route::get('/user/{id}',function($id){

//      return "tampilkan user dengan id = $id";
// })->where('id','[A-Z]{2}[0-9]+');

// Route::get('/hubungi-kami',function(){
//      return "<h2>hubungi kami</h2>";
// });

// Route::redirect('/contact-us','/hubungi-kami');


//ioute::get('/mahasiswa',function(){
////echo"<h2>daftar mahasiswa</h2>";
//     });
//
//     Route::get('/dosen',function(){
//          echo"<h2>daftar nama dosen</h2>";
//     });
//
//     Route::get('/karyawan',function(){
//
//          echo"<h2>daftar nama karyhawan</h2>";
//     });
//});
//
//Route::fallback(function(){
//
//     return '<h2 text-align ="center"><u>maaf bosq ,halaman tidak di temukan</u></h2>';
//});
//
//
//Route::get('/buku/{a}',function($a){
//   return "buku ke-$a";
//});
//
//Route::get('/buku/{b}',function($c){
//   return "buku ke-$b";
//});
//
//Route::get('/buku/{c}',function($c){
//    return "buku ke-$c";
//});
//Route::get('belajar',function(){
//    echo"sedang belajar laravel";
//    echo"<p>sedang belajar laravel</p>";
//});
//
//
//Route::get('mahasiswa/fasilkom/anton',function(){
//    return'<h2 style="text-align:center"><u>welcome anton</u></h2>';
//
//});
//
//Route::get('mahasiswa/{nama}',function($nama){
//   return "tampilkan nama mahasiswa bernama $nama";
//});
//
//Route::get('contoh',function(){
//   $hello = ['hello world',2=>['hello jakarta','hello medan']];
//   dd($hello);
//
//	   
//	   return $hello;
//
//});
// Route::get('mahasiswa/{nama}/{umur}/{asal}',function($nama,$umur,$asal){
	
// 	return view('mahasiswa')->with ('nama',$nama)
// 	                        ->with ('umur',$umur)
// 	                        ->with ('asal',$asal);
// });

Route::get('/',function(){

	return view('UTS.public.master');
});
