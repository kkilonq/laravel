<x-layout>
    @php
    $sum = 0;
    @endphp
    @if(isset($numbers) && count($numbers) > 0 )
    @foreach ($numbers as $number)
    @php
    $sum += $number;
    @endphp
     @endforeach 
    Сумма всех Элементов : {{$sum}}
    @else 
  В этом массиве находится 0 элементов !! 
    @endif
   
</x-layout>