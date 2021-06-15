<?php

use App\Http\Controllers\Core\GeneratorBuilderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('generator_builder', [GeneratorBuilderController::class, 'builder'])->name('io_generator_builder');
    Route::get('field_template', [GeneratorBuilderController::class, 'fieldTemplate'])->name('io_field_template');
    Route::get('relation_field_template', [GeneratorBuilderController::class, 'relationFieldTemplate'])->name('io_relation_field_template');
    Route::post('generator_builder/generate', [GeneratorBuilderController::class, 'generate'])->name('io_generator_builder_generate');
    Route::post('generator_builder/rollback', [GeneratorBuilderController::class, 'rollback'])->name('io_generator_builder_rollback');
    Route::post('generator_builder/generate-from-file', [GeneratorBuilderController::class, 'generateFromFile'])->name('io_generator_builder_generate_from_file');

    Route::resource('roles', App\Http\Controllers\RoleController::class);

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);

    Route::resource('articles', App\Http\Controllers\ArticleController::class);

    Route::resource('users', App\Http\Controllers\UserController::class);
});
