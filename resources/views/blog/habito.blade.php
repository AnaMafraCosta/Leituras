@extends('layouts.dashboard')

@section('barra-busca')
    @include('layouts.busca')
@endsection()

@section('conteudo-principal')
<div class="card shadow mb-4" >
    <div class="card-body" style="color:#45858C">
    <div class="d-sm-flex align-items-center justify-content-between mb-4" >
        <h1 class="h3 mb-0" style="color: #D92B04;">Como manter o hábito da leitura?</h1>
    </div>
            <ol>
            <li><b>Meu ambiente é muito barulhento</b><br>
            Nem todo mundo consegue ler com o barulho do trânsito, de conversa ou da TV do vizinho. Isso pode ser um problema para quem mora em grandes centros urbanos ou divide a casa com outras pessoas. Pensando nisso, sugerimos trilhas sonoras de leitura para você colocar no fone de ouvido e mergulhar na história. 
            </li><br>
            <li><b>Sinto muito sono </b><br>
            Muitos leitores relatam que acabam caindo no sono quando pegam um livro. A nossa hipótese é de que a maioria escolhe o período da noite para ler, e aqui moram duas possíveis respostas:
                <ol>
                <li>Temos um hormônio regulador do sono chamado melatonina, que é liberado em ambientes escuros.</li>
                <li>Ao longo do dia, acumulamos uma substância chamada adenosina. Quanto mais alto seu nível, mais sono sentimos. Essa combinação é o que nos faz dormir, normalmente no fim do dia, quando a noite chega.</li>
                </ol>
            Por isso, para quem prefere reservar o período noturno para a leitura, as dicas são: leia sentado(a)! Se o sono bater, experimente ler algumas linhas em voz alta e, se isso não funcionar, mexa-se um pouco. Caminhe, pule ou alongue-se!
            Outra boa dica é trocar seu horário de leitura por um tempo. Por exemplo, se você costuma ler à noite, antes de dormir, e tem caído no sono logo nas primeiras páginas, talvez sua rotina esteja cansativa demais e esse não seja o melhor horário para leitura no momento. Experimente acordar um pouco antes ou reservar 15 minutos para seu livro no intervalo do almoço. Quando as coisas se acalmarem, você pode retomar a leitura noturna, ou quem sabe acabar descobrindo um novo horário preferido para ler.
            </li><br>
            <li><b>Não consigo priorizar</b><br>
            Você não precisa deixar de fazer nada para concluir as leituras que deseja. Basta organizar melhor suas atividades e, principalmente, o tempo dedicado a cada uma delas. Por exemplo: ao invés de ver 2 episódios seguidos daquela série que você tanto gosta, que tal olhar um só e usar os outros 30 ou 40 minutos para ler? Vale fazer o mesmo cálculo para atividades corriqueiras: 5 minutos a menos nas redes sociais, 10 minutos de leitura na cama antes de dormir ou ao acordar, 30 minutos de leitura no fim de semana e por aí vai.
            </li><br>
            <li><b>Esqueço de ler</b><br>
            Um hábito simples e que pode fazer toda a diferença no seu hábito literário é sempre carregar um livro com você. Aqueles 15 minutos na sala de espera já são suficientes para você estabelecer um ritmo de leitura e, de quebra, sentir que o tempo passou mais rápido.
            </li><br>
            <li><b>Estou pensando em abandonar o livro</b><br>
            Considerando a imensidão de livros que existem e o pouco tempo que temos para ler todos eles, devemos insistir naquelas leituras que não nos deixam entusiasmados desde as primeiras páginas? Uma boa solução para essa questão é a regra das 50 páginas, descrita pela bibliotecária Nancy Pearl em seu blog:
            “Se a leitura de um livro não está sendo prazerosa, tente ler mais 50 páginas! Depois, decida se deseja continuar ou abandonar o livro. Essa estratégia evita que você desista dos livros cedo demais e não se permita conhecer novas ideias e perspectivas. Por outro lado, a vida é muito curta para ler livros que você não gosta ou considera repetitivos. Não se force a ler a coisa toda — se a história não estiver funcionando para você depois de 50 páginas, o final provavelmente não a tornará muito melhor…”
            </li>
        </ol>
        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6>TAG LIVROS<h6></div>
        </div>
    </div>

@endsection