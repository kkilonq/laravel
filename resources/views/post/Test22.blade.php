<x-layout>
    @if (isset($array) && count($array) > 0 )
    @foreach ($array as $array2 )
    <p>{{$array2}}</p>
    @endforeach
@else
в массиве нету элементов
@endif
</x-layout>
