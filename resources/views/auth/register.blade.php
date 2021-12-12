@extends('layouts.auth')

@section('imagem')
<div class="col-lg-6 d-none d-lg-block" style="background-image: url('https://i.pinimg.com/564x/7c/96/a5/7c96a52c168156998512430051143526.jpg');background-position: center;"></div>
@endsection

@section('mensagem')
    Cadastre-se!
@endsection()

@section('formulario')
<form class="user" action="{{url('/register')}}" method="POST">
    @csrf
    <div class="form-group">
            <input type="text" class="form-control form-control-user" id="name" name="name"
                placeholder="Nome">
            @error('name')
                <span>{{$message}}</span>
            @enderror
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user" id="email" name="email"
            placeholder="Email">
            @error('email')
                <span>{{$message}}</span>
            @enderror
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user"
                id="password" name="password" placeholder="Senha">
                @error('password')
                <span>{{$message}}</span>
                @enderror
        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user"
                id="password_confirmation" name="password_confirmation" placeholder="Repita a senha">
                @error('password_confirmation')
                <span>{{$message}}</span>
                @enderror
            </div>
    </div>
    <button href="#" class="btn btn-user btn-block" style="background-color:#1D4D52; color:white">
        Registrar Conta
    </button>
<!--     <hr>
    <a href="index.html" class="btn btn-google btn-user btn-block">
        <i class="fab fa-google fa-fw"></i> Register with Google
    </a>
    <a href="index.html" class="btn btn-facebook btn-user btn-block">
        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
    </a> -->
</form>

<hr>
@endsection()

@section('link-login-register')
<a class="small" href="{{route('login')}}" style="color:#1D4D52">Já é cadastrado? Entre!</a>
@endsection()

