<?php
use App\Http\Controllers\notecontroller;
use App\Http\Controllers\welcomecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [welcomecontroller::class,'welcome'])->name('welcome');
Route::get('/note',[notecontroller::class,'index'] )->name('note.index');
Route::get('/note/create',[notecontroller::class,'create'] )->name('note.create');

