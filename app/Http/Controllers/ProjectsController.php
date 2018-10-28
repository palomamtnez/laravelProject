<?php

namespace App\Http\Controllers;
use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
    	$projects = Project::all();
    	return view ('projects.index', ['projects' => $projects] /* OR compact('projects') */ );
    }

    public function show(Project $project){
    	
    	return view('projects.show', compact('project'));
    }

    public function update(Project $project) {

    	$project->update(request(['title', 'description']));

/*
    	$project->title = request('title');
    	$project->description = request('description');

    	$project->save();
*/
    	return redirect('/projects');
    }

    public function edit(Project $project){

    	return view('projects.edit', compact('project'));
    }

    public function create(){
    	return view ('projects.create');
    }

    public function destroy(Project $project){
    	$project->delete();

    	return redirect('/projects');

    }

    public function store(){

    		/// Jeffrey mostro tres maneras de hacerlo, pero esta es la mejor:

    			Project::create(request()->validate([
                'title'=>['required', 'min:3'],
                'description'=>'required'
            ]));

    	 	/// OR

	    /*
	    	Project::create([
	    		'title' => request('title'),
	    		'description' => request('description')
	    	]);
		*/

    		/// OR 

    	/*
	    	$project = new Project();

	    	$project->title = request('title');
	    	$project->description = request('description');

	    	$project->save();
		*/
    	return redirect('/projects');
    }
}
