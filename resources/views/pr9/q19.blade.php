<x-layout>
    @foreach ($users as $user)
    <?php
   dump($user->name);
   dump($user->age);
   dump($user->email);
    ?>
    @endforeach
</table>
</x-layout>