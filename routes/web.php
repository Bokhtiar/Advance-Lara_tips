<?php

use App\Http\Controllers\PartialRouteCheckController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProvisionServer;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('user-location', function () {

	$ip = '203.190.11.3';
    $data = \Location::get($ip);
    dd($data->countryName);

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check_curl', [\App\Http\Controllers\HomeController::class, 'getData']);
Route::get('/date', [\App\Http\Controllers\HomeController::class, 'date']);
Route::post('/date/store', [\App\Http\Controllers\HomeController::class, 'date_store']);



    //any missing route redirect to todo.index url
    Route::resource('todo', TodoController::class)
        ->missing( function(Request $request){
        return redirect()->route('todo.index');
    });

    Route::resource('partial', PartialRouteCheckController::class)->only([
        'index','create','edit'
    ]); //this partial route only work this function

    Route::resource('except-partial', PartialRouteCheckController::class)->except([
        'create',
    ]);//but axcept declare function not working



Route::match(array('GET', 'POST'), '/r', function()
{
    // $todos = Todo::all();
    // return view('modules.todo.if_else', compact('todos'));

});

// Route::get('/todo/{title?}', [\App\Http\Controllers\Contact::class, 'index']);

    //any missing route redirect to todo.index url
    Route::resource('todo', TodoController::class)
        ->missing( function(Request $request){
        return redirect()->route('todo.index');
    });

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


//contact info
Route::get('/contact/{value}', [\App\Http\Controllers\TodoController::class, 'contact']);

//without controller page show
Route::view('/about', 'about');