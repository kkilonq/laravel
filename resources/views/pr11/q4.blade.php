<x-layout> 
@if (session('success'))
<div style="color: green">
{{session('success')}}
</div>
@endif

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
        @foreach($posts as $post)
            <tr>
            <td>{{ $post->id }}</td>
            <td><a href="#">{{ $post->title }}</a></td>
            <td>{{ $post->desc }}</td>
            <td>{{ $post->text }}</td>
            <td>{{ $post->date }}</td>
            </tr>
            @endforeach
      
    </tbody>
</table>
</x-layout>