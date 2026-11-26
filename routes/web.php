<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Song\Create;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/songs/create', Create::class);
