<?php
use App\Http\Controllers\todolistcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', [todolistcontroller::class, 'index']);

Route::post('/save-todo', [todolistcontroller::class,'saveTodo'])-> name("saveTodo");

Route::get('/delete/{id}',[todolistcontroller::class,'deleteItem']);

Route::post('edit',[todolistcontroller::class,'updateTodo'])->name("updateTodo");

Route::get('/edit/{id}',[todolistcontroller::class,'editItem']);
