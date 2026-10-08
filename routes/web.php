<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnemyController;
use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/enemies', [EnemyController::class, 'index'])->name('enemies.index');
Route::get('/enemies/create', [EnemyController::class, 'create'])->name('enemies.create');
Route::post('/enemies/', [EnemyController::class, 'store'])->name('enemies.store');
Route::get('/enemies/{enemy}', [EnemyController::class, 'show'])->name('enemies.show');
Route::delete('/enemies/{enemy}', [EnemyController::class, 'destroy'])->name('enemies.destroy');

Route::get('/heroes', [HeroController::class, 'index'])->name('heroes.index');
Route::get('/heroes/create', [HeroController::class, 'create'])->name('heroes.create');
Route::post('/heroes/', [HeroController::class, 'store'])->name('heroes.store');
Route::get('/heroes/{hero}', [HeroController::class, 'show'])->name('heroes.show');
Route::delete('/heroes/{hero}', [HeroController::class, 'destroy'])->name('heroes.destroy');

Route::get('/dashboard', [DashboardController::class, 'index']);