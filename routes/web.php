<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Models\Book;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/cart', function () {
        return view('cart');
    });

    Route::get('/checkout', function (){
        return view('checkout');
    });
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/detail/{id}', function (string $id){
    $book=Book::findOrFail($id);
    $otherBooks=Book::whereHas('categories', function($query) use ($book) {
        $query->whereIn('categories.id', $book->categories->pluck('id')->toArray());
    })->get();
    return view('detail', ['book'=> $book, 'otherBooks' => $otherBooks]);
});

require __DIR__.'/auth.php';
