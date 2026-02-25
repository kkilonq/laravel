<x-layout>
    @foreach ($number as $numbers )
    @if ($numbers ===0)

    @else
    <p>{{$numbers}}</p>
    @endif
    @endforeach
</x-layout>