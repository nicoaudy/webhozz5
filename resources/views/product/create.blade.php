@extends('layouts.base')

@section('title', 'Create product')

@section('content')
	<h3>Create new product 💁</h3> <hr>
	<form action="/products" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category_id">
				<option value="">Please Select</option>
				@foreach ($categories as $category)
					<option value="{{ $category->id }}">{{ $category->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Please fill in the name">
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="text" name="price" class="form-control" placeholder="Please fill in the price">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description" cols="30" rows="10"></textarea>
		</div>
		<div class="form-group">
			<label>Image</label>
			<input type="file" name="image" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>
	</form>
@endsection