<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\admin_posts;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\testt;
use App\Http\Middleware\go_to_page_admin;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\ImagesPostController;

use App\Http\Controllers\EmailController;
  
use App\Http\Controllers\ImageController;
// use Intervention\Image\Exception\NotSupportedException;
// use Intervention\Image\Image;

// use App\Http\Middleware\Auth;
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





Route::post("index2" ,  [ PostController::class , 'index2' ] ) ;
Route::get("getNumber/{id}" ,  [ PostController::class , 'getNumber' ] )->name("getNumber") ;






Route::post('/send_email', [EmailController::class, 'index']);



Route::get('/index', function () {
    return phpinfo(); 
    return view('index');
});
Route::get('/admin.user.users', function () {
    return view('admin.user.users');
});

Auth::routes();

Route::resource('/post', PostController::class);

Route::get('/', [ PostController::class,'home'] )->name('/');
Route::get('advertisement/create', [ PostController::class,'create'] )->name('advertisement.create')->middleware('auth');
Route::get('advertisement/edit/{id}', [ PostController::class,'edit'] )->name('advertisement.edit')->middleware('auth');
Route::post('advertisement/update', [ PostController::class,'update'] )->name('advertisement.update')->middleware('auth');
Route::get('advertisement/delete/{id}', [ PostController::class,'destroy'] )->name('advertisement.delete')->middleware('auth');
Route::get('advertisement.show', [ PostController::class,'show'] )->name('advertisement.show');
// category
Route::get('advertisement/posts/{id}', [ PostController::class,'search'] )->name('advertisement.posts');
Route::get('advertisement/filter', [ PostController::class,'filter'] )->name('advertisement.filter');

Route::get('delete_image/{id}', [ ImagesPostController::class,'destroy'] )->name('delete_image')->middleware('auth');;



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::view('info.about')->name('about');
Route::get('about', 
function(){
    return view('info.about');
}
)->name('about');

Route::get('test', [testt::class,'test' ])->name('test');
Route::post('/register/auth', [RegisterController::class,'register' ])->name('auth.register');









// admin

Route::get('/admin/post/posts',[ admin_posts::class , 'index' ]  )->name('admin/post/posts')->middleware('isAdmin');
Route::get('admin/post/show/{post}', [admin_posts::class , 'show' ])->name('admin/post/show')->middleware('isAdmin');
Route::post('/admin/post/update', [admin_posts::class , 'update' ])->name('admin/post/update')->middleware('isAdmin');
// Route::post('/admin/post/search', [admin_posts::class , 'search' ])->name('admin/post/search')->middleware('isAdmin');
Route::get('/admin/post/sel/{id}', [admin_posts::class , 'sel' ])->name('admin/post/sel')->middleware('isAdmin');
Route::get('/admin/post/delete/{id}', [admin_posts::class , 'destroy' ])->name('admin/post/delete')->middleware('isAdmin');
Route::get('/admin/users', [admin_posts::class , 'table_users' ])->name('admin/users')->middleware('isAdmin');
Route::get('/admin/user/delete/{id}', [admin_posts::class , 'delete_user' ])->name('admin/user/delete')->middleware('isAdmin');
Route::get('/admin/user/update_to_admin/{id}', [admin_posts::class , 'update_to_admin' ])->name('admin/user/update_to_admin')->middleware('isAdmin');
// Route::post('search_user', [admin_posts::class , 'search_user' ])->name('search_user')->middleware('isAdmin');
Route::get('/search_user', [admin_posts::class , 'search_user' ])->name('search_user')->middleware('isAdmin');






// Route::get('/admin/post/edit', function () {
//     return view('admin/post/edit');
// })->name('admin/dashboard')->middleware('isAdmin');



Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin/dashboard')->middleware('isAdmin');

Route::redirect('/admin', '/admin/dashboard');

// user

// profile_user
Route::get('/user/profile', [ ProfileController::class,'index'] )->name('/user/profile')->middleware('auth');
Route::get('/profile_user/visit/{id}', [ ProfileController::class,'visit'] )->name('profile_user/visit')->middleware('auth');
Route::get('/profile_user/all_post', [ ProfileController::class,'all_post'] )->name('/profile_user/all_post')->middleware('auth');
Route::get('profile_user/settings', [ ProfileController::class,'settings'] )->name('/profile_user/settings')->middleware('auth');
Route::post('profile_user/update', [ ProfileController::class,'update'] )->name('profile_user/update')->middleware('auth');
Route::post('profile_user/change_password', [ ProfileController::class,'change_password'] )->name('profile_user/change_password')->middleware('auth');

Route::get('Like/create/{id_post}', [LikeController::class, 'create'])->name('like/create')->middleware('auth');
Route::get('Like/destroy/{id_post}', [LikeController::class, 'destroy'])->name('like/destroy')->middleware('auth');
// FollowerController
Route::get('follower/store/{id}', [FollowerController::class, 'store'])->name('follower/store')->middleware('auth');
Route::get('follower/delete/{id}', [FollowerController::class, 'destroy'])->name('follower/delete')->middleware('auth');





// Route::get('/admin/posts', function () {
//     return view('admin.posts');
// })->name('admin/posts');

Route::get('image', 'ImageController@index' ) ;
Route::post('image/store', 'ImageController@store' ) ;





Route::get('/w', function () {
    return view('welcome') ;
});