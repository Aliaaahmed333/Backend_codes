<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return "hello world";
});

// Route::get('user/{category}/{id}',function($category,$id){
//     return " product category => $category product id=> $id";
// })->where('id'=>'[0-9]+' ,'category'=>'[a-z]+');

// Route::get('/home',function(){
//     $name = 'aliaa';
//     $age = 24;
//     return view('layouts.app_layout',['user_name' => $name,'age' => $age , 'skills' =>['html'],'css','php']);

// });


// Route::get('/shop',function(){

//     return view('layouts.shop');
// });

 Route::get('/home', [PageController::class, 'home']);

 Route::get('/shop', [PageController::class, 'shop']);


 Route::get('/contact', [PageController::class, 'contact']);
 Route::post('/contact_us', [PageController::class, 'contact_us'])->name('contact_us');
