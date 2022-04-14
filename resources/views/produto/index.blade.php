@extends('layout.app')
@section('title', 'Listagem de produtos')
@section('content')
<h1>Produtos</h1>
<ul>
    @foreach($produtos as $produto)
    <li>
        <a href="http://127.0.0.1:8000/produtos/{{$produto->id}}">{{$produto->titulo}}</a>
    </li>
    @endforeach
</ul>
@endsection