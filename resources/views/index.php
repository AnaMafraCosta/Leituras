@extends('layouts.auth')

@section('imagem')
<div class="col-lg-6 d-none d-lg-block" style="background-image: url('https://i.pinimg.com/564x/22/81/7b/22817b83e52581ebfcca93ea5e34fda0.jpg');"></div>
@endsection

@section('mensagem')
    Tecendo Leituras
@endsection()
    
@section('formulario')
    <h6 style="text-align:center">Registre todas as suas aventuras literárias em um só lugar!</h6>
@endsection()

@section('link-login-register')

    <a href="{{route('register')}}" class="d-none d-sm-inline-block btn btn-sm shadow-sm"  style="background-color: #D92B04; color:white;margin: 10px;">
        <i class="fas fa-share"></i>
        Cadastro
    </a>

    <a href="{{route('login')}}" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="background-color: #D92B04; color:white;margin: 10px;">
        <i class="fas fa-share"></i>
        Login
    </a>
@endsection()
