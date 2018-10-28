	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<h1>Create a new project</h1>

		<form method="POST" action="/projects">
			{{ csrf_field() }}
			<div class="field">
			<label class="label" for="title">Project title</label>
			<div class="control"> 
				<input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" value="{{old('title')}}" placeholder="Project title" required>
			</div>
		</div>
			<div>
				<textarea name="description" placeholder="Project description" required>{{old('description')}}</textarea>
			</div>
			<div>
				<button type="submit">Create project</button>
			</div>
			
			@include('errors')
		</form>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	</body>
	</html>