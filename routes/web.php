<?php
use App\Http\Controllers\postcontroller;
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
Route::get('/hello_world',function() {
    return view('hello-world');
});

Route::get('/create-post',[postcontroller::class, 'addpost']);


Route::post('/create-post',[postcontroller::class, 'createPost'])->name('post.create');

Route::get('/posts',[postcontroller::class,'getpost']);




// Route::get('/create_post',function() {
//     return view('create-post');
// })->name('create-post-route');
// Route::get('/read_post',function() {
//     return view('read-post');
// })->name('read-post-route');
// Route::get('/view_post',function() {
//     return view('view-post');
// })->name('view-post-route');


Route::get('/add_post',[postcontroller::class, 'addpost']);


Route::get('/generate_post',[postcontroller::class, 'generatepost'])->name('post.generate');