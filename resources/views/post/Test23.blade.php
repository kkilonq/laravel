<x-layout>
    <ul>
    @foreach ($array as $array2 )
    @if ($loop->first)
    <li class="first">{{$loop->index+1}} - {{$array2}} </li>
    @elseif($loop->last)
    <li class="last">{{$loop->index+1}} - {{$array2}} </li>
    @else
    <li>{{$loop->index+1}} - {{$array2}} </li>
    @endif
    @endforeach
    
</x-layout>
</ul>