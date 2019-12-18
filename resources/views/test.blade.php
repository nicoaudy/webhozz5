<h1>Hello from test</h1>
{{ json_encode($language) }} <br>
{{ $message }} <br>
{{ $number }}

<ul>
	@foreach($language as $item)
		<li>{{ $item }}</li>
	@endforeach
</ul>
