<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('generator_builder', [GeneratorBuilderController::class, 'builder'])->name('io_generator_builder');
Route::get('field_template', [GeneratorBuilderController::class, 'fieldTemplate'])->name('io_field_template');
Route::get('relation_field_template', [GeneratorBuilderController::class, 'relationFieldTemplate'])->name('io_relation_field_template');
Route::post('generator_builder/generate', [GeneratorBuilderController::class, 'generate'])->name('io_generator_builder_generate');
Route::post('generator_builder/rollback', [GeneratorBuilderController::class, 'rollback'])->name('io_generator_builder_rollback');
Route::post('generator_builder/generate-from-file', [GeneratorBuilderController::class, 'generateFromFile'])->name('io_generator_builder_generate_from_file');


Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::resource('permissions', App\Http\Controllers\PermissionController::class);