<x-layout>
    @foreach ($numbers as $number)
    @if ($number % 2 == 0 )
<ul>
    <li>{{$number}}</li>
</ul>
    @endif
    @endforeach
</x-layout>
