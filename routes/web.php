<?php

/////////////////////////////////////////////////////////////////////////

/* Route::get('/', function () {

	$tasks = [
		'Do 1',
		'Do 2',
		'Do 3'
	];
    return view('welcome', [
    	'tasks' => $tasks,
    	'foo' => request('title')
    ]);
});
*/


/////////////////////////////////////////////////////////////////////////

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

/////////////////////////////////////////////////////////////////////////

/*

	GET /projects (index method)

	GET /projects/{id} (show method)

	GET /projects/create (create method)

	POST /projects (store method)

	GET /projects/{id}/edit (edit method)

	PATCH /projects/{id} (update method)

	DELETE /projects/{id} (destroy method)


*/

/*
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{id}', 'ProjectsController@show');
Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');
Route::get('/projects/{id}/edit', 'ProjectsController@edit');
Route::patch('/projects/{id}', 'ProjectsController@update');
Route::delete('/projects/{id}', 'ProjectsController@destroy');
*/

/////////////////////////////////////////////////////////////////////////

Route::resource('projects', 'ProjectsController');  // This command creates all the routes needed for the REST structure  
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store' );
