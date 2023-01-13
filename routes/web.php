<?php

use App\Http\Controllers\CSVController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\GamePlayerController;
use App\Models\GamePlayer;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'token' => csrf_token(),
    ]);
});

Route::get('/test', function () {
    return Inertia::render('Test');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        // $players = GamePlayer::orderBy("id", "desc")->get();
        $players = GamePlayer::latest()->take(50)->get();
        $topTen = GamePlayer::orderBy('result', 'asc')->take(10)->get();
        return Inertia::render('Dashboard',['data' => $players, 'topTen' => $topTen]);
    })->name('dashboard');

    Route::get('csv', [GamePlayerController::class, 'export'])->name('generate-csv');
});

Route::get('results/{player}', [GamePlayerController::class, 'show'])->name('share-url');

Route::post('/initiate-game', [GamePlayerController::class, 'initiateGame'])->name('initiate-game');
Route::get('/start-game/{player}', [GamePlayerController::class, 'startGame'])->name('start-game');
Route::post('/end-game/{player}', [GamePlayerController::class, 'endGame'])->name('end-game');


// Register route disabled at config/fortify.php Features::registration()
