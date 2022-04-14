@extends('layout.app')
@section('title', '$produto->titulo')
@section('content')
    <h1>Produto {{$produto->titulo}}</h1>
         <ul>
            <li>Referência: {{$produto->referencia}}</li>
            <li>Preço: {{$produto->preco}}</li>
            <li>Adcionado em: {{$produto->created_at}}</li>
        </ul>
        <p>{{$produto->descrição}}</p>
    <a href="javascrip:history.go(-1)">Voltar</a>
@endsection