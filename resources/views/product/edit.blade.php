@extends('layouts.base')

@section('title', 'Edit Product')

@section('content')
	<h3>Edit Category {{ $product->id }} 💁</h3> <hr>
	<form action="/category/{{ $product->id }}" method="POST">
		@csrf
		@method("PUT")
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category_id">
				<option value="">Please Select</option>
				@foreach ($categories as $category)
					<option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected': null }}>{{ $category->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Please fill in the name" value="{{ $product->name }}">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description" cols="30" rows="10">{{ $product->description }}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
@endsection