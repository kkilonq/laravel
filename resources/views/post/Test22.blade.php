<x-layout>
    @foreach ($array as $array2 )
@if (isset($array2) && count($array2) > 0 )
{{ $array2 }}
@else
в массиве нету элементов
@endif
    @endforeach
</x-layout>
