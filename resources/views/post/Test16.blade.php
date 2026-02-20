<x-layout>
  @foreach ($numbers as $number)
  <ul>
    <li>{{$number}}</li>
</ul>
@endforeach
<br>
@foreach ($numbers as $number)
  <ul>
    <li>{{$number*$number}}</li>
</ul>
@endforeach
<br>
@foreach ($numbers as $number)
  <ul>
    <li>{{sqrt($number)}}</li>
</ul>
@endforeach

</x-layout>