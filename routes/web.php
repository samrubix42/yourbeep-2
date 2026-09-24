<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home2')->name('home');
Route::livewire('/in', 'pages::homein')->name('homein');
