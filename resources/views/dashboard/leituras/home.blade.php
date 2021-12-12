@extends('layouts.dashboard')

@section('barra-busca')
    @include('layouts.busca')
@endsection()

@section('cabecalho-pagina')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="mb-0" style="color:#45858C">Leituras</h2>
        <a href="{{route('leituras.create')}}" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="background-color: #D92B04; color:white">
        <i class="fas fa-edit"></i>
        Nova Leitura
        </a>
    </div>
@endsection()

@section('conteudo-principal')
                    <div class="card shadow mb-4" >
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold" style="color:#D92B04">Leituras Registradas</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <table class="table table-bordered" style="color:#45858C" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Autor</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($leituras as $leituras)
                                        <tr>
                                        
                                            <td>{{$leituras->titulo}}</td>
                                            <td>{{$leituras->autor}}</td>
                                            <td><a href="{{route('leituras.show', ['leitura'=>$leituras->id])}}" style="color:#E5974C">
                                            <i class="fas  fa-info-circle"></i></a>
                                            |
                                            <a href="{{route('leituras.edit', ['leitura'=>$leituras->id])}}" style="color:#E5974C">
                                            <i class="fas  fa-edit"></i></a>
                                            </td>
                                        
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


@endsection()