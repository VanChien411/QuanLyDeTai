<?php

use App\Http\Controllers\AddTopicController;
use App\Http\Controllers\AthurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\TopicDetailController;
use App\Http\Controllers\UserController;
use App\Models\Topic;
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
Route::get('/home',[HomeController::class,'store'])->name('home');
Route::get('/login',[HomeController::class,'loginerror']);
Route::get('/register',[HomeController::class,'registererror']);

Route::post('/home/login',[UserController::class,'login'])->name('login');
Route::post('/home/register',[UserController::class,'register'])->name('register');
Route::get('/home/logout',[HomeController::class,'logout'])->name('logout');
// Route::get('/home/{id}',[TopicController::class,'show','id=>{id}']);
Route::get('/home/user/{id}',[TopicDetailController::class,'show','id=>{id}']);
Route::get('/2/2',[UserController::class,'index']);
Route::post('auth',[RoleController::class,'insertrole'])->name('auth');
Route::prefix('home')->as('home.')->group(function (){
    Route::get('/manager',[RoleController::class,'show'])->name('manager');
    Route::get('/addTopic',[AddTopicController::class,'show'])->name('addTopic');
    Route::post('/addTopicData',[AddTopicController::class,'insertTopic'])->name('addTopicData');
    
});

Route::get('addTopic',[AddTopicController::class,'show']);
//giao diện add
Route::get('add',function(){
    return view('categories/add');
});
