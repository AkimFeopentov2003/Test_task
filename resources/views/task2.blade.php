@extends('layouts.app')
@section('content')
    <h2>SQL Запрос</h2>
    <h3>Поиск по id</h3>
    <p>SELECT barcode
    <br>FROM barcodes
    <br>WHERE nomenclature_id = "тут id";
    </p>
    <br>
    <h3>Поиск по code</h3>
    <p>SELECT barcode<br>
        FROM barcodes<br>
        WHERE nomenclature_id = (SELECT id FROM nomenclature WHERE code = "тут code");
    </p>
    <br>
    <p> Здесь реализован поиск сначала по code потом по id</p>
    <br>
    <form method="post" action="{{ url('/task2') }}">
        @csrf
        <input type="text" name="nom_id" placeholder="Введите ID или code номенклатуры">
        <button type="submit">Отправить</button>
    </form>
    @if(isset($response))
        <h3>Штрихкоды для выбранной номенклатуры:</h3>
        <ul>
            @foreach($response as $barcode)
                <li>{{ $barcode }}</li>
            @endforeach
        </ul>
    @endif

    <br>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Вернуться в меню</a>
@endsection
