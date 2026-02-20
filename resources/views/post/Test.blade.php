<!DOCTYPE html>
<html>
	<head>
		<title>my view</title>
	</head>
	<body>
		 <p style="{{$coolclass}}">{{ $name }}</p>
		 <p>{{ $age }}</p>
        <p>{{ $salary }}</p>
        <p><input type="text" value="{{$input}}"></p>
        <p><input type="text" value="{{$input2}}"></p>
        <p><input type="text" value="{{$input3}}"></p>
        <p> <a href="{{$href}}" >Нажми на меня</a></p>
        <p>@php
        Echo date('d.m.Y',mktime(0,0,0,2,3,2026)) 
        @endphp</p>
	</body>
</html>
