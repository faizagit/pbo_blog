<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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

// Route::get('/', function () {
//     return view('user.home');
// });



// Route::resource('/', UserController::class);
Route::resource('user', UserController::class);

//admin
Route::get('/admin', [AdminController::class, 'index'])->name('index_admin');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
// Route::get('/admin/post', [AdminController::class, 'post'])->name('post');
// Route::get('/admin/post/create', [AdminController::class, 'create_post'])->name('create_post');

// Route::get('/blog', function() {
//     return view('admin.post.posts',[
//         "title" => "Posts",
//         "posts" => Post::all()
//     ]);
// })->name('blog');

// Route::get('/',[PostController::class,'']);
Route::get('/' , [PostController::class, 'index'])->name('blog');

Route::get('/posts/{id}', function($id){
    return view('user.post.post',[
        "post" => Post::find($id),
        'active' => 'home'
    ]);
});

Route::get('/categories', function(){
    return view('user.post.categories',[
        'title' => 'Post Categories',
        'active' => 'categories',   
        'categories' => Category::all()
        
    ]);
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');