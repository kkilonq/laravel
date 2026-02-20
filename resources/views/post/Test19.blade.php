<x-layout>
    @if (is_array($date) == true)

    @foreach ($date as $dates)
<ul>
    <li>{{$dates}}</li>
</ul>
    @endforeach
    @elseif (is_int($date) == true)
<p>{{$date}}</p>
@else
Ошибка в переменной не массив и не число
 @endif
</x-layout>
