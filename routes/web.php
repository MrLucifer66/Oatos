<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProposedNewsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\FullCalenderController;
use App\Models\News;
use Illuminate\Support\Facades\Http;
use SimplePie\SimplePie;
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
Route::get('/parse', [App\Http\Controllers\ParserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    Route::get('/news/search', [NewsController::class, 'search'])->name('news.search');
    Route::get('/proposed-news', [ProposedNewsController::class, 'index'])->name('proposed-news');
    Route::get('/proposed-news/{id}', [ProposedNewsController::class, 'show'])->name('proposed-news.show');
    Route::get('/proposed-news/{proposedNews}/edit', [ProposedNewsController::class, 'edit'])->name('proposed-news.edit');
    Route::put('/proposed-news/{proposedNews}', [ProposedNewsController::class, 'publish'])->name('proposed-news.publish');
    Route::delete('/proposed-news/{proposedNews}', [ProposedNewsController::class, 'destroy'])->name('proposed-news.destroy');
    Route::put('/proposed-news/{proposedNews}/publish', [ProposedNewsController::class, 'publish'])->name('proposed-news.publish.post');
    Route::get('/users', function () { return view('components.users'); });
    Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UsersController::class, 'update'])->name('users.update');
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create'); 
    Route::controller(FullCalenderController::class)->group(function(){
        Route::get('fullcalender', 'index');
        Route::post('fullcalenderAjax', 'ajax');
    });
    
});

Route::get('/task', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{task}/edit', [App\Http\Controllers\TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('tasks.destroy');
Route::get('/findUser', [App\Http\Controllers\TaskController::class, 'findUser'])->name('user.find');
Route::get('/testFindUser', [App\Http\Controllers\UserController::class, 'find']); // для тестов

// Отображение формы для редактирования новости.
Route::get('/proposed-news/{id}', [ProposedNewsController::class, 'show'])->name('proposed-news.show');
Route::get('/proposed-news/{proposedNews}/edit', [ProposedNewsController::class, 'edit'])->name('proposed-news.edit');
Route::put('/proposed-news/{proposedNews}', [ProposedNewsController::class, 'publish'])->name('proposed-news.publish');
Route::delete('/proposed-news/{proposedNews}', [ProposedNewsController::class, 'destroy'])->name('proposed-news.destroy');

// Публикация новости.
Route::put('/proposed-news/{proposedNews}/publish', [ProposedNewsController::class, 'publish'])->name('proposed-news.publish.post');
