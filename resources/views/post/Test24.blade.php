<x-layout>
    @foreach ($number as $numbers )
    @if ($loop->index < count($number) - 3)
    <b>{{$numbers}}</b>
    @else
    <i>{{$numbers}}</i>
    @endif
    @endforeach
    
</x-layout>