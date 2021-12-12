@extends('layouts.dashboard')

@section('barra-busca')
    @include('layouts.busca')
@endsection()

@section('cabecalho-pagina')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0" style="color:#45858C">Editar Leitura</h1>
    </div>
@endsection()

@section('conteudo-principal')
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <form action="{{route('leituras.update', ['leitura'=>$leitura->id])}}" class="user" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group" style="color:#1D4D52" >
                                    <label for="titulo">Título</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$leitura->titulo}}"></input>
                                    @error('titulo')
                                        <br>
                                        <span class="alert alert-danger"> {{ $errors->first('titulo')}} </span>
                                    @enderror
                                </div>

                                <div class="form-group" style="color:#1D4D52">
                                    <label for="autor">Autor</label>
                                    <input type="text" class="form-control" id="autor" name="autor" value="{{$leitura->autor}}"></input>
                                    @error('autor')
                                        <br>
                                        <span class="alert alert-danger"> {{ $errors->first('autor')}} </span>
                                    @enderror
                                </div>

                                <div class="form-group" style="color:#1D4D52" >
                                    <label for="genero">Gênero</label>
                                    <input type="text" class="form-control" id="genero" name="genero" value="{{$leitura->genero}}"></input>
                                    @error('genero')
                                        <br>
                                        <span class="alert alert-danger"> {{ $errors->first('genero')}} </span>
                                    @enderror
                                </div>

                                <div class="form-group" style="color:#1D4D52">
                                    <label for="paginas">Numero de Páginas</label>
                                    <input type="text" class="form-control" id="paginas" name="paginas" value="{{$leitura->paginas}}"></input>
                                    @error('paginas')
                                        <br>
                                        <span class="alert alert-danger"> {{ $errors->first('paginas')}} </span>
                                    @enderror
                                </div>

                                <div class="form-group" style="color:#1D4D52" >
                                    <label for="editora">Editora</label>
                                    <input type="text" class="form-control" id="editora" name="editora" value="{{$leitura->editora}}"></input>
                                    @error('editora')
                                        <br>
                                        <span class="alert alert-danger"> {{ $errors->first('editora')}} </span>
                                    @enderror
                                </div>

                                <div class="form-group" style="color:#1D4D52">
                                    <label for="idioma">Idioma</label>
                                    <input type="text" class="form-control" id="idioma" name="idioma" value="{{$leitura->idioma}}"></input>
                                    @error('idioma')
                                        <br>
                                        <span class="alert alert-danger"> {{ $errors->first('idioma')}} </span>
                                    @enderror
                                </div>
                               
                                <div class="form-group" style="color:#1D4D52">
                                    <label for="resenha">Resenha</label>
                                    <input type="text" class="form-control" id="resenha" name="resenha" value="{{$leitura->resenha}}"></input>
                                    @error('resenha')
                                        <br>
                                        <span class="alert alert-danger"> {{ $errors->first('resenha')}} </span>
                                    @enderror
                                </div>

                                <div class="form-group" style="color:#1D4D52" >
                                    <label for="frase">Ciotação preferida</label>
                                    <input type="text" class="form-control" id="frase" name="frase" value="{{$leitura->frase}}"></input>
                                    @error('frase')
                                        <br>
                                        <span class="alert alert-danger"> {{ $errors->first('frase')}} </span>
                                    @enderror
                                </div>

                                <div class="form-group" style="color:#1D4D52">
                                    <label for="nota">Nota</label>
                                    <input type="text" class="form-control" id="nota" name="nota" value="{{$leitura->nota}}"></input>
                                    @error('nota')
                                        <br>
                                        <span class="alert alert-danger"> {{ $errors->first('nota')}} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                <button type="submit" class="btn" style="background-color: #D92B04; color:white"> Editar</botton>
                                </div>
                            </form>

                        </div>
                    </div>

@endsection