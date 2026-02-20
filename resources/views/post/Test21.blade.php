<x-layout>
    @foreach ($employees as $employeess )
<ul>
    <li>{{ $employeess['name'] }}  {{ $employeess['surname'] }}  {{ $employeess['salary'] }}</li>
</ul>
    @endforeach
    <br></br>
    <table border="1"   >
        @foreach ($employees as $employeesss )
        <tr>
            @foreach ($employeesss as $employeessss)
            <td style="padding: 10px"> {{ $employeessss }}</td>
            @endforeach
        </tr>

        @endforeach
    </table>
</x-layout>
