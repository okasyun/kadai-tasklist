<?php

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


Route::get('/', 'TasksController@index');
Route::resource('tasks', 'TasksController');

/*
// デフォルトのコメント部分は省略

Route::get('/', function () {
    return view('welcome');
});

// CRUD
// メッセージの個別詳細ページ表示
Route::get('tasks/{id}',  'TasksController@show');

Route::get('tasks/create', 'TasksController@create')->name('tasks.create');

Route::get('tasks/{id}/edit', 'MessagesController@edit')->name('tasks.edit');

// index: showの補助ページ
Route::get('tasks', 'TasksController@index')->name('tasks.index');
/*