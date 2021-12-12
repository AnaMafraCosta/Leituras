@extends('layouts.auth')

@section('imagem')
<div class="col-lg-6 d-none d-lg-block" style="background-image: url('https://i.pinimg.com/564x/5b/0e/25/5b0e25eac9cf85d551d2d42c54a96334.jpg')"></div>
@endsection

@section('mensagem')
    Bem-vindo de volta!
@endsection()

@section('formulario')
<form class="user" action="{{route('login')}}" method="POST">
    @csrf
    <div class="form-group">
        <input type="email" name="email" class="form-control form-control-user"
            id="email" aria-describedby="emailHelp"
            placeholder="Insira o endereço de email">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control form-control-user"
            id="password" placeholder="Senha">
    </div>
    <div class="form-group">
            <input type="checkbox" class="custom-control-input" id="customCheck">
    </div>
    
    <button class="btn btn-user btn-block" style="background-color:#1D4D52; color:white">
        Entrar
    </button>

</form>

<hr>

<div class="text-center">
    <a class="small" href="forgot-password.html" style="color:#1D4D52">Esqueceu a senha?</a>
</div>
@endsection()

@section('link-login-register')
<a class="small" href="{{route('register')}}" style="color:#1D4D52">Cadastre-se!</a>
@endsection()


                                    
    