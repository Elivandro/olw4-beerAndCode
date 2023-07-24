<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Models\SalesCommission;
use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::Resource('/clients', ClientController::class);

    Route::get('/chart', function (){
    $fields = implode(',', SalesCommission::getColumns());
    $question = "";

    $chatgpt = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'me dê a formula da riqueza',
            'max_tokens' => 1500
        ])->choices[0]->text;
    })->name("openai.chatgpt");
});