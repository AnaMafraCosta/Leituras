@extends('layouts.dashboard')

@section('barra-busca')
    @include('layouts.busca')
@endsection()

@section('cabecalho-pagina')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="mb-0" style="color:#45858C">Painel Inicial</h2>
        <a href="{{route('leituras.create')}}" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="background-color: #D92B04; color:white">
        <i class="fas fa-edit"></i>
        Nova Leitura
        </a>
    </div>
@endsection()

@section('conteudo-principal')
                       
<!-- Content Row -->
<div class="row">
                       <!-- Card  -->
                       <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                       <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <a href="{{route('termos')}}" style="color:#45858C">Termos Literários</a>
                                        </div>
                                           <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                           Paola Aleksandra</div>
                                       </div>
                                       <div class="col-auto">
                                       <img src="https://i.pinimg.com/564x/fc/e0/f6/fce0f6027d2fcbbd232fddcd71873f03.jpg" class="img-fluid">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <!-- Card -->
                       <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                       <div class="h5 mb-0 font-weight-bold text-gray-800">
                                       <a href="{{route('generos')}}" style="color:#45858C">  Gêneros Literários </a>
                                        </div>
                                           <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                           Aione Simões</div>
                                       </div>
                                       <div class="col-auto">
                                       <img src="https://i.pinimg.com/564x/65/e6/f7/65e6f7a80ce0e195d1062332bd1833df.jpg" class="img-fluid">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <!-- Card  -->
                       <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                       <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <a href="{{route('lermais')}}" style="color:#45858C"> 6 dicas para ler mais</a>
                                        </div>
                                           <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                           Luise Fialho</div>
                                       </div>
                                       <div class="col-auto">
                                       <img src="https://i.pinimg.com/564x/77/0b/21/770b219f7755c89e0f2466b33849bfa3.jpg" class="img-fluid">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <!-- Card  -->
                       <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card shadow h-100 py-2">
                               <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                       <div class="col mr-2">
                                           <div class="h5 mb-0 font-weight-bold text-gray-800">
                                           <a href="{{route('habito')}}" style="color:#45858C">  Como manter o hábito da leitura?</a>
                                            </div>
                                           <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                           TAG Livros</div>
                                       </div>
                                       <div class="col-auto">
                                       <img src="https://i.pinimg.com/564x/54/6c/10/546c10be2688d9a5f08d456ef3419cfc.jpg" class="img-fluid">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
@endsection()
