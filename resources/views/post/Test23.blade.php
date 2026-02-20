<x-layout>
    <ul>
    @foreach ($array as $array2 )
    <li>{{$loop->index+1}} - {{$array2}} </li>
    @endforeach
</x-layout>
</ul>