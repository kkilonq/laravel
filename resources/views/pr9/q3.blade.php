<x-layout>
    <table border = "1">
    @foreach ($users as $user)
    <tr>
    <td>
    <?php
    dump($user)
    ?>
    </td>
    </tr>
    @endforeach
</table>
</x-layout>