<x-layout>
<table border="1"">
    <thead>
        <tr>
        <th>ID</th>
        <th>Заголовок</th>
        <th>Описание</th>
        <th>Текст</th>
        <th>Дата</th>
        <th>Ссылка на редоктирование</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
           <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->desc }}</td>
            <td>{{ $post->text }}</td>
            <td>{{ $post->date }}</td>
            <td><a href="/post/edit/{{ $post->id }}">ссылка</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-layout>