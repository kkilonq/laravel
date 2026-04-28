<x-layout>
<table border="1"">
    <thead>
        <tr>
        <th>ID</th>
        <th>Заголовок</th>
        <th>Описание</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->desc }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-layout>