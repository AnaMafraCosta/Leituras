@extends('layouts.dashboard')

@section('barra-busca')
    @include('layouts.busca')
@endsection()

@section('cabecalho-pagina')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0" style="color:#45858C">Registro</h1>
    </div>
@endsection()

@section('conteudo-principal')
<div class="card shadow mb-4" >
    <div class="card-body" style="color:#45858C">
    <div class="d-sm-flex align-items-center justify-content-between mb-4" >
        <h1 class="h3 mb-0" style="color: #D92B04;">{{$leitura->titulo}} - {{$leitura->autor}}</h1>
    </div>
        <h5 class="h5 mb-0">{{$leitura->resenha}}<h5><br>
        <h5>Ficha Técnica<h5>
        <ul>
            <li><h5 class="h5 mb-0">Gênero: {{$leitura->genero}}<h5></li>
            <li><h5 class="h5 mb-0">Número de Páginas: {{$leitura->paginas}}<h5></li>
            <li><h5 class="h5 mb-0">Editora: {{$leitura->editora}}<h5></li>
            <li><h5 class="h5 mb-0">Idioma: {{$leitura->idioma}}<h5></li>
        </ul>

        <h5 class="h5 mb-0">
        <i class="fas  fa-quote-left"></i>
            {{$leitura->frase}}
        <i class="fas  fa-quote-right"></i>
        <h5>

        <br>
        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h5>Nota: {{$leitura->nota}}<h5></div>
        
        </div>


@endsection