@extends('layouts.app')
@section('content')
    <h2>Описание модели</h2>
    <img src="{{ asset('images/model.png') }}" alt="Model Image">
    <p>
        В данной модели представлена связь "Один ко многим", где один объект номенклатура(Nomenklatura) может быть
        связан с несколькими другими объектами штрихкод (Barcode). То есть у номенклвтуры может быть несколько
        штрихкодов. Сама модель находится в корне проекта model.drawio.
    </p>
    <br>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Вернуться в меню</a>
@endsection
