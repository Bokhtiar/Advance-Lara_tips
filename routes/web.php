<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProvisionServer;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::match(array('GET', 'POST'), '/r', function()
{
    // $todos = Todo::all();
    // return view('modules.todo.if_else', compact('todos'));

});

Route::get('/todo/{title?}', [\App\Http\Controllers\Contact::class, 'index']);

Route::resource('todo', TodoController::class);

Route::get('/todos/{todo:slug}', function (Todo $post) {
    return $todo;
});


Route::fallback(function () {
    return view('errors.404');
});

//end of route


// middleware start

Route::get('/check-todo', [\App\Http\Controllers\TodoController::class, 'check_middleware'])->middleware('checkAge:1');

Route::get('/single', 'ProvisionServer@')->name('single');



