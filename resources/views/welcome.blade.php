@extends('layouts.app')
@section('content')
    <div class="list-group">
        <a href="{{ route('task1') }}" class="list-group-item list-group-item-action">Задача 1</a>
        <a href="{{ route('task2') }}" class="list-group-item list-group-item-action">Задача 2</a>
        <a href="{{ route('task3') }}" class="list-group-item list-group-item-action">Задача 3</a>
        <a href="{{ route('task4') }}" class="list-group-item list-group-item-action">Задача 4</a>
        <a href="{{ route('task5') }}" class="list-group-item list-group-item-action">Задача 5</a>
        <a href="{{ route('task6') }}" class="list-group-item list-group-item-action">Задача 6</a>
        <a href="{{ route('task7') }}" class="list-group-item list-group-item-action">Задача 7</a>
        <a href="{{ route('task8') }}" class="list-group-item list-group-item-action">Задача 8</a>
    </div>
@endsection
