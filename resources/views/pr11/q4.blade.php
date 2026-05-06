<x-layout>
<table border="1"">
    <thead>
        <tr>
        <th>ID</th>
        <th>Заголовок</th>
        <th>Описание</th>
        <th>Текст</th>
        <th>Дата</th>
        </tr>
    </thead>
    <tbody>

            <tr>
            <td>{{ $posts->id }}</td>
            <td><a href="#">{{ $posts->title }}</a></td>
            <td>{{ $posts->desc }}</td>
            <td>{{ $posts->text }}</td>
            <td>{{ $posts->date }}</td>
            </tr>
      
    </tbody>
</table>
</x-layout>