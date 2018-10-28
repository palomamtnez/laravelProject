<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

	protected $fillable = [   
		// $guarded es justamente lo contrario a fillable (son los argumentos que no quieres que se llenen)
		'title',
		'description'
	];

	public function tasks()
	{
		return $this->hasMany(Task::class);
	}

	public function addTask($task){

		$this->tasks()->create($task);
		
		/*return Task::create([
    		'project_id' => $this->id,
    		'description' => $description
    	]);*/
	}
    
}
