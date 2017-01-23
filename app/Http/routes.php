<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$books = DB::table('categories')
	->join('books','categories.id','=','books.category_id')
	->where('books.status','public')
	->select('categories.name as category','books.title','books.description')
	->get();

	return view('querybuilder.index', compact('books'));
});

/*

<!DOCTYPE html>
<html>
    <head>
        <title>Query Builder</title>
    </head>
    <body>
        <h1>Query Builder</h1>
        <ul>
        @foreach($users as $user)
            <li>
                <strong>Autor</strong>: {{ $user->name }}
                {{ $user->email }} 
                <ul>
                @foreach($user->manyBooks as $book)
                    <li>{{ $book->title }}</li>
                @endforeach
                </ul>
            </li>
        @endforeach
        </ul>
    </body>
</html>

Route::get('/', function () {
	$users = AdvancedELOQUENT\User::all();
	return view('querybuilder.index', compact('users'));
});
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
