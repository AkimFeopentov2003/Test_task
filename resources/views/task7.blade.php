@extends('layouts.app')
@section('content')
    <h2>Преобразование строки</h2>
    <form method="post" action="{{ url('/task7') }}">
        @csrf
        <input type="text" name="input_string" placeholder="Введите строку">
        <button type="submit">Преобразовать</button>
    </form>
    <p>{{ $converted ?? '' }}</p>
    <br>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Вернуться в меню</a>
@endsection
