@extends('layouts.base')

@section('title', $title)

@section('content')
	<div class="table-responsive">
		<h1>Categories</h1>
		<a href="/category/create" class="btn btn-info mb-2">Create new category</a>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Description</th>
					<th>Created At</th>
					<th>Updated At</th>
				</tr>
			</thead>
			<tbody>
				@php
					$num = 0;
				@endphp
				@foreach($categories as $item)
				@php
					$num++;
				@endphp
				<tr>
					<td>{{ $num }}</td>
					<td>{{ $item->name }}</td>
					<td>{{ $item->description }}</td>
					<td>{{ $item->created_at }}</td>
					<td>{{ $item->updated_at }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection