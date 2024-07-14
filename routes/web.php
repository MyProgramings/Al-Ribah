<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\DashController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartnerController;

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
Route::get('/search_item', function () {
    return view('search');
})->name('search_item');
Route::get('/', [PostController::class, 'index_blog'])->name('index_blog');
Route::get('/about-us', function () {
    return view('aboutus');
})->name('about.us');
Route::get('create-new/{id}', [PostController::class, 'create_by_type'])->name('post.create.new');
Route::resource('/post', PostController::class);
Route::post('/search', [PostController::class, 'search'])->name('search');
Route::get('/category/{id}/{slug}', [PostController::class, 'getByCategory'])->name('category');

Route::resource('/comment', CommentController::class);
Route::post('/reply/store', [CommentController::class, 'replyStore'])->name('reply.add');

Route::post('/notification', [NotificationController::class, 'index'])->name('notification');
Route::get('/notification',[NotificationController::class, 'allNotification'])->name('all.Notification');

Route::get('user/{id}', [UserController::class, 'getPostsByUser'])->name('profile');
Route::get('user/{id}/comments', [UserController::class, 'getCommentsByUser'])->name('user_comments');

Route::group(['prefix' => 'admin',  'middleware' => 'Admin'], function() { 
    Route::get('/dashboard', [DashController::class, 'index'])->name('admin.dashboard');
    Route::resource('/category', CategoryController::class);
    Route::resource('/posts', 'App\Http\Controllers\admin\PostController');
    Route::resource('/role', RoleController::class);
    Route::get('/permission', [PermissionController::class, 'index'])->name('permissions');
    Route::post('/permission', [PermissionController::class, 'store'])->name('permissions');
    Route::resource('/user', UserController::class);
    Route::resource('/partners', PartnerController::class);
    Route::resource('/page', PageController::class);
});

Route::get('permission/byRole', [RoleController::class, 'getByRole'])->name('permission_byRole')->middleware('Admin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});


require_once __DIR__ . '/fortify.php';