@extends('layouts.base')

@section('title', 'Edit Category')

@section('content')
	<h3>Edit Category {{ $category->id }} 💁</h3> <hr>
	<form action="/category/{{ $category->id }}" method="POST">
		@csrf
		@method("PUT")
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Please fill in the name" value="{{ $category->name }}">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description" cols="30" rows="10">{{ $category->description }}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
@endsection