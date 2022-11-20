<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('about', [BookController::class, 'about']);
Route::get('book', [BookController::class, 'index']);
Route::get('contact', [BookController::class, 'contact']);
Route::get('gallery', [BookController::class, 'gallery']);



Auth::routes();
Route::get('/hi',function(){
    return  view('hi');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/signup', function (Request $request) {

    $request->validate([
        "name"=> "required|min:3|max:50",
        "email"=>"required:email",
         "country"=>"required",
        "password"=> "required|confirmed|min:6|max:15",
        // 'file' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048'
        
    ]);
    $data = [
        "name" => $request->name,
        "email" => $request->email,
        "country" => $request->country,
        "password" => $request->password,
        // 'file' => $request->file
    ];
return view('hi')->with($data);
    
})->name('signup');

Route::get('session-set',function(Request $request){
    session([
        'name'=>'samra'
    ]);
    $product= [
        'name'=>'Oranges',
        'price'=> 200
    ];
    session(["product"=>$product]);
    $request->session()->put('id',2);
    return view('getsession');
});
Route::view('session-get','getsession');
Route::get('destroy',function(){
    session()->flush();
});