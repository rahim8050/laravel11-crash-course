<?php
use App\Http\Controllers\notecontroller;
use App\Http\Controllers\welcomecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [welcomecontroller::class,'welcome'])->name('welcome');
// Route::get('/note',[notecontroller::class,'index'] )->name('note.index');
// Route::get('/note/create',[notecontroller::class,'create'] )->name('note.create');
// Route::post('/note',[notecontroller::class,'store'] )->name('note.store');
// Route::get('note/{id}',[notecontroller::class,'show'])->name('note.show');
// Route::get('note/{id}/edit',[notecontroller::class,'edit'])->name('note.edit');
// Route::put('note/{id}',[notecontroller::class,'update'])->name('note.update');
// Route::delete('note/{id}',[notecontroller::class,'destroy'])->name('note.destroy');
Route::resource('note' ,notecontroller::class);
