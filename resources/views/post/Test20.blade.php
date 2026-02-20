<x-layout>
    <table border="1">
    @foreach ($numbers as $number )
    <tr>
      @foreach ($number as $numberss )
<td>
    {{ $numberss }}
</td>
      @endforeach
      </tr>
    @endforeach
</table>
</x-layout>
