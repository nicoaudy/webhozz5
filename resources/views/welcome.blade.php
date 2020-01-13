@extends('layouts.base')

@section('content')
<div class="container">
	<div class="row">
		@foreach ($products as $item)
			<div class="col md-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="{{ asset('images/'. $item->image) }}" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">{{ $item->title }}</h5>
					<p class="card-text">{{ $item->description }}</p>
					<form action="/add-to-cart/{{ $item->id }}" method="POST">
						@csrf
						<button type="submit" class="btn btn-primary">Add to cart</button>
					</form>
				  </div>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection
