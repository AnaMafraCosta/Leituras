@extends('layouts.dashboard')

@section('barra-busca')
    @include('layouts.busca')
@endsection()

@section('conteudo-principal')
<div class="card shadow mb-4" >
    <div class="card-body" style="color:#45858C">
    <div class="d-sm-flex align-items-center justify-content-between mb-4" >
        <h1 class="h3 mb-0" style="color: #D92B04;">6 dicas para ler mais</h1>
    </div>
            <ol>
            <li><b>Leia diferentes tipos de livro simultaneamente</b><br>
            Revezar-se entre um romance, um livro de não-ficção e outro de poemas, por exemplo, ajuda muito sua lista de leituras a girar mais rápido. Tendo mais de uma opção, você evita postergar a hora de ler por não estar com vontade de um livro específico em determinado momento.
            </li><br>
            <li><b>Flexibilize sua lista de leituras </b><br>
            Seguir à risca uma ordem predeterminada nem sempre é a melhor opção. Pense bem: não vale a pena passar na frente um livro novo que você está louco para começar? Adiar mais um pouco a leitura daquela obra que já está na sua estante há meses (ou tomar a decisão de passar o livro adiante) não faz nenhum mal.
            </li><br>
            <li><b>Leia no transporte público ou enquanto espera</b><br>
            O tempo gasto diariamente no transporte ou em filas não precisa ser tempo perdido! Ter sempre um bom livro à mão torna fácil preencher essas lacunas. Se você não gosta de interromper um capítulo na metade, prefira livros de contos, de poemas ou com capítulos curtos.
            </li><br>
            <li><b>Descubra qual o seu período favorito para ler</b><br>
            Já tentou reparar em qual parte do dia a leitura lhe parece mais agradável? Prefere ler com luz natural ou antes de dormir? Perceber essas sutilezas é essencial na hora de organizar o dia, pois permite separar seus horários favoritos para os livros e o restante do tempo para as demais atividades.
            </li><br>
            <li><b>Priorize os livros</b><br>
            Quantas vezes você está com tempo livre e, sem perceber, pega o celular ou fica trocando de canal na televisão, sem estar realmente interessado no conteúdo que está consumindo? Repensar essas atitudes automáticas é o primeiro passo para fazer da leitura um hábito no lugar delas.
            </li><br>
            <li><b>Participe de um clube do livro</b><br>
            A leitura, por si só, é uma atividade individual e solitária. Os momentos posteriores a ela, entretanto, não precisam e nem devem ser assim! Por que não propor uma leitura conjunta a um de seus amigos? Debater o que você está lendo com pessoas próximas ou grupos de leitores pode ser um grande incentivo, além de agregar diferentes pontos de vista à sua experiência.
            </li>
        </ol>
        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6>LUISE FIALHO<h6></div>
        </div>
    </div>

@endsection