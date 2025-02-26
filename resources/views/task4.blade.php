@extends('layouts.app')
@section('content')
    <h2>Список Номенклатура - Штрихкоды</h2>
    <p> В верху результат вывода текста echo. Ниже структурированный вывод. В файле /public/output.txt вывод текста в файле</p>
    <ul>
        @foreach($data as $item)
            <li>{{ $item->code }} - {{ $item->barcode }}</li>
        @endforeach
    </ul>
    <br>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Вернуться в меню</a>
@endsection
