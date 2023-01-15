<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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


Route::get('/', [HomeController::class,'index']);
Route::get('/test', [HomeController::class,'test']);

Route::get('/page/{slug}', [PageController::class, 'show']);

Route::get('/test2',[App\Http\Controllers\Test\TestController::class, 'test']);


Route::resource('/posts', PostController::class);

Route::get('/update', [HomeController::class, 'updateTableData']);

Route::match(['post','get'],'/delete',[HomeController::class,'deleteDataFromTable']);


// Route::get('/',function(){
//     $res = 56+48;
//     $name = 'Batyrzhan';
//     return view('home', compact('res','name'));
// })->name('homepage');


// Route::get('/about', function(){
   
//     return view('about' );
// });

// Route::redirect('/some', '/about');


// Route::post('/send-email', function(){
//     if(!empty($_POST)){
//         dump($_POST);
//     }
// return 'Send email';
// });

// // match  support methods

// Route::match(['get','post', 'put'],'/contact', function(){
//     if(!empty($_POST)){
//         dump($_POST);
//     } 
// return view('contact');
// })->name('test');


// Route::get('/post/{id}/{slug?}', function($id, $slug = null){
// return "Post : $id | $slug";
// })->name('post');

// Route::prefix('admin')->name('admin.')->group(function(){

//     Route::get('/posts', function(){
//         return "Posts page";
//         });
    
//     Route::get('/post/create', function(){
//     return 'Post Create';
//     });
    
//     Route::get('/post/{id}/edit', function($id){
//     return "Edit post : $id";
//     })->name('post');

// });



// Route::fallback(function(){
//     // return redirect()->route('homepage');
//     abort(404, "Opps! Page not found!" );
// });
