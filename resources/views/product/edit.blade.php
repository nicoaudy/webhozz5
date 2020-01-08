@extends('layouts.base')

@section('title', 'Edit Product')

@section('content')
	<h3>Edit Product {{ $product->id }} 💁</h3> <hr>
	<form action="/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
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
			<label>Price</label>
			<input type="number" name="price" class="form-control" placeholder="Please fill in the price" value="{{ $product->price }}">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description" cols="30" rows="10">{{ $product->description }}</textarea>
		</div>
		<div class="form-group">
			<label>Image</label>
			<input type="file" name="image">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
@endsection