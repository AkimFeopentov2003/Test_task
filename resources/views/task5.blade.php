@extends('layouts.app')
@section('content')
    <h2>Текущее время</h2>
    <form method="get" action="{{ url('/task5') }}">
        @csrf
        <button type="submit">Получить время</button>
    </form>
    <p>{{ $time ?? '' }}</p>
    <br>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Вернуться в меню</a>
@endsection
