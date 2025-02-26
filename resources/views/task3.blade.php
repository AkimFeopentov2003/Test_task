@extends('layouts.app')
@section('content')
    <h2>Список Номенклатура - Штрихкоды</h2>
    <h3>SQL запрос</h3>
    <p>SELECT n.name, n.code AS nomenclature, b.barcode<br>
        FROM nomenclature n<br>
        LEFT JOIN barcodes b ON n.id = b.nomenclature_id<br>
        ORDER BY n.code ASC, b.barcode ASC;</p>
    <ul>
        @foreach($data as $item)
            <li> code:{{ $item->code }} - name:{{$item->name}} - barcode:{{ $item->barcode }}</li>
        @endforeach
    </ul>
    <br>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Вернуться в меню</a>
@endsection
