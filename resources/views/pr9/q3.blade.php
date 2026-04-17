<x-layout>
    <table border = "1">
    @foreach ($users as $user)
    <tr>
    <?php
    <td>dump($user)</td>
    ?>
    </tr>
    @endforeach
</table>
</x-layout>