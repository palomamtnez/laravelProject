<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	$tasks = [
		'Do 1',
		'Do 2',
		'Do 3'
		];

	    return view('welcome', [
	    	'tasks' => $tasks,
	    	'foo' => request('title')
	    ]);
    }

    public function about(){
    	return view('about');
    }


    public function contact(){
    	return view('contact');
    }
}
