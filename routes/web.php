<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/colors',function(){
    echo "<h1>Colors:</h1>";
    $colors = ['red', 'blue', 'green', 'yellow'];
    foreach ($colors as $value) {
        echo "$value ";
    }
    // return "<h1>Colors:</h1>";
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
Route::put('/posts/{post}/status/update', [PostController::class, 'statusUpdate'])->name('posts.statusUpdate');
Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{post}/duplicate', [PostController::class, 'duplicate'])->name('posts.duplicate');

Route::get('/contacts', [ContactController::class, 'create'])->name('contacts.create');
Route::get('/contacts/sent', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/display-car', function () {
    $car = \App\Models\Car::create('Toyota', 'GR86', 2023, 'Steel Grey');
    echo $car->html();   // vienkāršs HTML output
    $car2 = \App\Models\Car::create('Tesla', 'GR86', 2026, 'Steel Blue');
    echo $car2->html();
});
