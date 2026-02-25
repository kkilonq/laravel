<x-layout>
    @foreach ($number as $numbers)
    @if($numbers == 0)
    @break
    @else
    <p>{{$numbers}}</p>
    @endif
    @endforeach
</x-layout>