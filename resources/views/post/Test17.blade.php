<x-layout>
  @foreach ($string as $strings)
  <ul>
    <li>{{$strings}}</li>
</ul>
@endforeach
<br>
 @foreach ($string as $key => $strings)
  <ul>
    <li>{{$key +1 }} {{$strings}}</li>
</ul>
@endforeach
</x-layout>