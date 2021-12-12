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
    <div class="row"style="color:#1D4D52" >
        <div class="col">
            <h3 class="h3 mb-0">Livro: {{$leitura->titulo}}</h3>
            <h3 class="h3 mb-0">Autor: {{$leitura->autor}}<h3>
            <h5 class="h5 mb-0">Gênero: {{$leitura->genero}}<h5>
            <h5 class="h5 mb-0">Número de Páginas: {{$leitura->paginas}}<h5>
            <h5 class="h5 mb-0">Editora: {{$leitura->editora}}<h5>
            <h5 class="h5 mb-0">Idioma: {{$leitura->idioma}}<h5>
            <h5 class="h5 mb-0">Resenha: {{$leitura->resenha}}<h5>
            <h5 class="h5 mb-0">Citação Preferida: {{$leitura->frase}}<h5>
            <h5 class="h5 mb-0">Nota: {{$leitura->nota}}<h5>
        </div>
    </div>

@endsection