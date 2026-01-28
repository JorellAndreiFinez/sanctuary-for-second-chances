<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::view('/get-help', 'pages.get-help', ['page' => 'get-help'])->name('get-help');


Route::view('/contact-us', 'pages.contact-us', ['page' => 'contact-us'])->name('contact-us');


Route::prefix('about')->name('about.')->group(function () {
    Route::view('/sanctuary-for-second-chances', 'pages.sanctuary', [
        'page' => 'sanctuary',
        'darkHero' => true
    ])->name('sanctuary');
    Route::view('/mission', 'pages.mission', ['page' => 'mission'])->name('mission');
    Route::view('/board-of-trustees', 'pages.board-of-trustees', ['page' => 'board-of-trustees'])->name('board-of-trustees');
    Route::view('/history', 'pages.history', ['page' => 'history'])->name('history');
    Route::view('/sustainable-development-goals', 'pages.sdg', ['page' => 'sdg'])->name('sdg');
});

Route::prefix('programs')->name('programs.')->group(function () {

    Route::view('/residential', 'pages.residential', [
        'page' => 'residential'
    ])->name('residential');

    Route::view('/family-support', 'pages.family-support', [
        'page' => 'family-support'
    ])->name('family-support');

    Route::view('/non-residential', 'pages.non-residential', [
        'page' => 'non-residential'
    ])->name('non-residential');

    Route::view('/recovery-coaching-training', 'pages.recovery-coaching-training', [
        'page' => 'recovery-coaching-training'
    ])->name('recovery-coaching-training');

    Route::view('/psychoeducational-awareness', 'pages.psychoeducational-awareness', [
        'page' => 'psychoeducational-awareness'
    ])->name('psychoeducational-awareness');

    Route::view('/disease-of-addiction', 'pages.disease-of-addiction', [
        'page' => 'disease-of-addiction'
    ])->name('disease-of-addiction');

});


Route::prefix('addiction-recovery')->name('recovery.')->group(function () {

    Route::view('/twelve-steps', 'pages.twelve-steps', [
        'page' => 'twelve-steps'
    ])->name('twelve-steps');

      Route::view('/twelve-traditions', 'pages.twelve-traditions', [
        'page' => 'twelve-traditions'
    ])->name('twelve-traditions');

    Route::view('/twelve-promises', 'pages.twelve-promises', [
        'page' => 'twelve-promises'
    ])->name('twelve-promises');

     Route::view('/benedictine-spirituality', 'pages.benedictine-spirituality', [
        'page' => 'benedictine-spirituality'
    ])->name('benedictine-spirituality');

    Route::view('/life-recovery-program', 'pages.life-recovery-program', [
        'page' => 'life-recovery-program'
    ])->name('life-recovery-program');
});


