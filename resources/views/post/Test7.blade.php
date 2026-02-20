<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<body>
		   <p><ul>
	@foreach ($workers as $worker)
	{{ $loop->count }}
		<li>{{ $worker['name'] }} {{ $worker['age'] }} {{$worker['salary']}}</li>
	@endforeach

</ul>
</p>
<p>Город - {{$city}}</p>
	</body>
</html>
