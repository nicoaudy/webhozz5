@extends('layouts.base')

@section('title', 'Product')

@section('content')
	<div class="table-responsive">
		<h1>Products</h1>
		<a href="/products/create" class="btn btn-info mb-2">Create new product</a>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Category</th>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>
					<th>Image</th>
					<th>Created At</th>
					<th>Updated At</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@php
					$num = 0;
				@endphp
				@foreach($products as $item)
				@php
					$num++;
				@endphp
				<tr>
					<td>{{ $num }}</td>
					<td>{{ $item->category->name ?? null }}</td>
					<td>{{ $item->name }}</td>
					<td>{{ $item->price }}</td>
					<td>{{ $item->description }}</td>
					<td><img src="{{ asset('images/'.$item->image) }}" alt="" style="width: 60px; height:60px"></td>
					<td>{{ $item->created_at }}</td>
					<td>{{ $item->updated_at }}</td>
					<td>
						<a class="btn btn-success" href="/products/{{ $item->id }}/edit">Edit</a>
						<form action="/products/{{ $item->id }}" method="POST">
							@csrf
							@method("DELETE")
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
