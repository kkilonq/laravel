<x-layout>
    <table border = "1">
    @foreach ($users as $user)
    <tr>
    <?php
    dump($user)
    ?>
    </tr>
    @endforeach
</table>
</x-layout>