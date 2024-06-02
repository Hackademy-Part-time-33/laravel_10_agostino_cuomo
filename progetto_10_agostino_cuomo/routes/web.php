<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPrincipale;

Route::get('/', [ControllerPrincipale::class, 'home'])->name('home');

Route::get('lista', [ControllerPrincipale::class, 'lista'])->name('lista');

Route::get('formInserimento', [ControllerPrincipale::class, 'formInserimento'])->name('formInserimento');

Route::post('/', [ControllerPrincipale::class, 'invio'])->name('invio');