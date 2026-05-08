<x-layout>
    <form method="post">
        @csrf
        <p>
        <label>Заголовок:</label>
        <input type="text" name="title">
    </p>
     <p>
        <label>Описание:</label>
        <input type="text" name="desc">
    </p>
     <p>
        <label>Текс:</label>
        <input type="text" name="text">
    </p>
    
    <button>Сохранить</button>
    </form>
</x-layout>