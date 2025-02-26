@extends('layouts.app')
@section('content')
    <h2>Числа от X до Y</h2>
    <form id="taskForm" method="post" action="{{ url('/task6') }}">
        @csrf
        <input type="number" id="x" name="x" placeholder="Введите X" required>
        <input type="number" id="y" name="y" placeholder="Введите Y" required>
        <input type="number" id="k" name="k" placeholder="Введите K" required>
        <button type="submit">Отправить</button>
    </form>
    @if(isset($result))
        <h2>Результат</h2>
        @if(is_array($result))
            <pre>{{ implode(', ', $result) }}</pre>
        @else
            <pre>{{ $result }}</pre>
        @endif
    @endif
    <br>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Вернуться в меню</a>

    <script>
        document.getElementById('taskForm').addEventListener('submit', function(event) {
            const x = parseInt(document.getElementById('x').value);
            const y = parseInt(document.getElementById('y').value);

            if (x > y) {
                event.preventDefault();
                alert('Левая граница должна быть меньше правой!');
            }
        });
    </script>
@endsection
