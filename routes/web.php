<?php

use App\Http\Livewire\Animal;
use App\Http\Livewire\Especie;
use App\Http\Livewire\Raca;
use App\Http\Livewire\UserComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function()
{
    Route::get('/animal/create', [Animal::class, 'create'])->name('animal.create');
    Route::post('/animal/create', [Animal::class, 'store'])->name('animal.store');
    Route::get('/animal/edit/{id}', [Animal::class, 'edit'])->name('animal.edit');
    Route::put('/animal/edit/{id}', [Animal::class, 'update'])->name('animal.update');
    Route::get('/animal/show/{id}', [Animal::class, 'show'])->name('animal.show');
    Route::delete('/animal/destroy/{id}', [Animal::class, 'destroy'])->name('animal.destroy');
    Route::get('/animal', [Animal::class, 'index'])->name('animal.index');

    Route::get('/especie/create', [Especie::class, 'create'])->name('especie.create');
    Route::post('/especie/create', [Especie::class, 'store'])->name('especie.store');
    Route::get('/especie/edit/{id}', [Especie::class, 'edit'])->name('especie.edit');
    Route::put('/especie/edit/{id}', [Especie::class, 'update'])->name('especie.update');
    Route::get('/especie/show/{id}', [Especie::class, 'show'])->name('especie.show');
    Route::delete('/especie/destroy/{id}', [Especie::class, 'destroy'])->name('especie.destroy');
    Route::get('/especie', [Especie::class, 'index'])->name('especie.index');

    Route::get('/raca/create', [Raca::class, 'create'])->name('raca.create');
    Route::post('/raca/create', [Raca::class, 'store'])->name('raca.store');
    Route::get('/raca/edit/{id}', [Raca::class, 'edit'])->name('raca.edit');
    Route::put('/raca/edit/{id}', [Raca::class, 'update'])->name('raca.update');
    Route::get('/raca/show/{id}', [Raca::class, 'show'])->name('raca.show');
    Route::delete('/raca/destroy/{id}', [Raca::class, 'destroy'])->name('raca.destroy');
    Route::get('/raca', [Raca::class, 'index'])->name('raca.index');

    Route::get('/cliente/create', [UserComponent::class, 'create'])->name('cliente.create');
    Route::post('/cliente/create', [UserComponent::class, 'store'])->name('cliente.store');
    Route::get('/cliente/edit/{id}', [UserComponent::class, 'edit'])->name('cliente.edit');
    Route::put('/cliente/edit/{id}', [UserComponent::class, 'update'])->name('cliente.update');
    Route::get('/cliente/show/{id}', [UserComponent::class, 'show'])->name('cliente.show');
    Route::delete('/cliente/destroy/{id}', [UserComponent::class, 'destroy'])->name('cliente.destroy');
    Route::get('/cliente/export', [UserComponent::class, 'export'])->name('cliente.export');
    Route::get('/cliente', [UserComponent::class, 'index'])->name('cliente.index');
});


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

