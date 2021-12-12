@extends('layouts.dashboard')

@section('barra-busca')
    @include('layouts.busca')
@endsection()

@section('conteudo-principal')
<div class="card shadow mb-4" >
    <div class="card-body" style="color:#45858C">
    <div class="d-sm-flex align-items-center justify-content-between mb-4" >
        <h1 class="h3 mb-0" style="color: #D92B04;">Gêneros Literários</h1>
    </div>
            <h4>Não ficção</h4>
            Composição que reúnem fatos sobre a realidade. Podem ser ensaios, biografias, memórias, etc.
            <ul>
            <li><b>Biografia</b><br>
            Gênero no qual o autor narra sobre a vida de uma pessoa ou de várias pessoas. No blog, a classificação é utilizada também para as autobiografias, ou seja, biografias nas quais o autor narra sua própria história. Difere-se dos Romances Biográficos por não trazer o conteúdo sob a estrutura de um Romance (gênero textual).
            </li>
            <li><b>Memórias </b><br>
            “Gênero de literatura em que o narrador conta fatos da sua vida. É tipicamente um gênero do modo narrativo, assim como a novela e o conto, porém essa classificação é predominantemente atribuída a histórias verídicas ou baseadas em factos reais. Diferencia-se da biografia pois não se prende a contar a vida de alguém em particular, mas sim narrar as suas lembranças.”
            </li>
            </ul>

            <h4>Ficção</h4>
            Narrativa imaginária, irreal, que se opõe à Não-Ficção. Ainda que possa ser baseada em fatos reais, contará sempre com elementos de conteúdo imaginário.
            <ul>
            <li><b>Aventura</b>
            Refere-se “às obras em que o protagonista, ou outros grandes personagens são constantemente colocados em situações perigosas.”.
            </li><br>
            <li><b>Chick-Lit</b>
            Obras que abordam o universo feminino, sendo protagonizadas e majoritariamente escritas por mulheres. Geralmente são associadas a um conteúdo humorístico (embora nem todos os livros tenham essa característica de forma acentuada) e a um desenlace romântico, podendo ser associado ao Romance e ao Young Adult.
            </li><br>
            <li><b>Clássicos</b>
            Obras consagradas pela crítica literária com o passar do tempo, podendo remeter ou não à antiguidade clássica.
            </li><br>
            <li><b>Clássicos Contemporâneos</b>
            Autores e obras do século XX consagrados pela crítica literária.
            </li><br>
            <li><b>Drama </b>
            Obras que trazem conteúdos, centrais ou não, caracterizados por sofrimentos e/ou tragédias, podendo ou não terem um desfecho triste.
            </li><br>
            <li><b>Graphic Novel</b>
            Espécie de livro que normalmente conta “uma longa história através de arte sequencial (banda desenhada ou quadrinhos), e é frequentemente usado para definir as distinções subjetivas entre um livro e outros tipos de histórias em quadrinhos.”
            </li><br>
            <li><b>História em Quadrinhos (HQ)</b>
            “Forma de arte que conjuga texto e imagens com o objetivo de narrar histórias dos mais variados gêneros e estilos. São, em geral, publicadas no formato de revistas, livros ou em tiras publicadas em revistas e jornais.”
            </li><br>
            <li><b>Lad-Lit</b>
            Considerado, também, como um subgênero dos chick-lits, traz protagonistas homens em suas histórias, podendo ser escrito tanto por homens quanto por mulheres. Aqui será colocado como uma categoria à parte dos chick-lits por não necessariamente retratar o universo feminino, premissa básica do gênero.
            </li><br>
            <li><b>Literatura fantástica</b>
            “Gênero literário em que narrativas ficcionais estão centradas em elementos não existentes ou não reconhecidos na realidade, pela ciência dos tempos em que a obra foi escrita.”. Subdivide-se em diversos subgêneros.
            </li><br>

                <ul>
                <li><b>Distopia</b>
                “Distopia ou antiutopia é o pensamento, a filosofia ou o processo discursivo baseado numa ficção cujo valor representa a antítese da utopia ou promove a vivência em uma ‘utopia negativa’. As distopias são geralmente caracterizadas pelo totalitarismo, autoritarismo, por opressivo controle da sociedade. Nelas, ‘caem as cortinas’, e a sociedade mostra-se corruptível; as normas criadas para o bem comum mostram-se flexíveis. A tecnologia é usada como ferramenta de controle, seja do Estado, seja de instituições ou mesmo de corporações.”
                </li><br>
                <li><b>Fantasia</b>
                Gênero que geralmente se utiliza de “fenômenos sobrenaturais, mágicos e outros como um elemento primário do enredo, tema ou configuração.”
                </li><br>
                <li><b>Ficção científica</b>
                “Gênero literário desenvolvido no século XIX, que lida principalmente com o impacto da ciência, tanto verdadeira como imaginada, sobre a sociedade ou os indivíduos.”
                </li><br>
                <li><b>Sobrenatural</b>
                Gênero derivado dos livros de Horror, originados dos romances góticos do século XVIII. A ideia desses romances era a de provocar medo em seus leitores. Porém, com a evolução do gênero, o que temos hoje é a presença de seres sobrenaturais como vampiros, lobisomens, fantasmas, zumbis, etc, mas nem sempre acompanhados pela ideia do medo.
                </li><br>
                </ul>

            <li><b>Literatura Infantil</b>
            Obras voltadas ao público infantil, geralmente de até 10 anos.
            </li><br>
            <li><b>Literatura Infanto-Juvenil </b>
            Obras voltadas ao público geralmente entre 11 anos e 14 anos.
            </li><br>
            <li><b>Literatura nacional</b>
            Não configuram um gênero, mas indicam as obras brasileiras.
            </li><br>
            <li><b>New Adult</b>
            Gênero que aborda uma fase de transição da adolescência para a vida adulta, com personagens, geralmente, menores de 25 anos, saídos do Ensino Médio/High School. São normalmente associados aos Romances, Romances Adultos e Dramas, sendo obras caracterizadas pela intensidade de suas histórias. No blog, o critério de idade pode não ser levado em conta, ou seja, livros que trazem personagens mais novas, ainda na escola, podem ser assim classificados se as outras características da trama forem predominantes à idade.
            </li><br>
            <li><b>Realismo Mágico </b>
            Também conhecido por realismo fantástico ou realismo maravilhoso, traz elementos fantásticos considerados como parte da normalidade pelos personagens.
            </li><br>
            <li><b>Romance </b>
            Gênero que envolve histórias de conteúdo amoroso, sendo esse o centro ou não da trama. É subdividido em classificações mais específicas no blog, de acordo com cada obra, além de ser o gênero mais resenhado no Minha Vida Literária.
            </li><br>
            
                <ul>
                <li><b>Romance Adulto</b>
                História que traz, geralmente, conteúdo erótico, não sendo recomendável a menores de 16 anos.
                </li><br>
                <li><b>Romance Contemporâneo</b>
                História de amor que se passa em meio aos dias atuais.
                </li><br>
                <li><b>Romance Cristão</b>
                História baseada em conceitos cristãos e religiosos.
                </li><br>
                <li><b>Romance de Banca</b>
                Romance publicado em formato de banca: edições de bolso, econômicas, antigamente vendidas apenas em bancas de jornais. Geralmente associado ao Romance Adulto, podendo, também, se associar ao Romance de Época.
                </li><br>
                <li><b>Romance de Época</b>
                Gênero que aborda “histórias fictícias ambientadas em uma determinada época – e, consequentemente, a cultura da época em questão -, mas que não são, necessariamente, contextualizadas em um período histórico”, sendo o desenvolvimento romântico o foco do enredo. Geralmente associado ao Romance Adulto.
                </li><br>
                </ul>

            <li><b>Sick-Lit</b>
            Gênero normalmente voltado a personagens adolescentes envoltos em doenças graves, como depressão, anorexia, câncer, tentativas de suicídio, etc. Geralmente associado ao Drama e ao Young Adult.
            </li><br>
            <li><b>Terror </b>
            “Gênero criado com o intuito de causar medo, aterrorizar.”
            </li><br>
            <li><b>Thriller </b>
            “Thriller ou suspense é um gênero que usa o suspense, tensão e excitação como principais elementos.”
            </li><br>
            
                <ul>
                <li><b>Thriller da Conspiração</b>
                “Os protagonistas costumam ser jornalistas ou investigadores amadores que, geralmente sem saber, ‘puxam um fio’ e acabam por descobrir uma grande conspiração e a investigam até descobrir todos os segredos por trás dela, se tornando, assim, uma ameaça e alvo para os conspiradores.”
                </li><br>
                <li><b>Thriller de Época</b>
                Thriller (policial ou de qualquer outra subcategoria) que se passa em uma época do passado.
                </li><br>
                <li><b>Thriller Jurídico</b>
                Esse subgênero tem como cenário principal o tribunal, no qual aqueles que ignoram a lei são julgados por ela. Frequentemente, um advogado encontra um caso, muitas vezes atípico, e, a partir disso, vidas entram em jogo.
                </li><br>
                <li><b>Thriller Médico</b>
                Aqui, pode haver dois diferentes pontos de partida para o desenvolvimento do enredo. Um deles é a ameaça à vida de um médico. O outro, é a propagação de uma doença misteriosa, e muitas vezes artificial, que foge de controle.
                </li><br>
                <li><b>Thriller Policial</b>
                Uma sequência de crimes é apresentada, e o protagonista precisa investigá-los para descobrir quem são os criminosos e os seus motivos. Nesse subgênero, geralmente se foca no criminoso e não no investigador/policial, ainda que possa acontecer de a vida desses protagonistas também ser descrita durante o enredo. Podem-se, também, ser enfatizados os aspectos psicológicos dos personagens. Os temas mais comuns nesse subgênero são serial killers, assassinatos, assaltos, perseguições e tiroteios.
                </li><br>
                <li><b>Thriller Psicológico</b>
                Nesse subgênero, “os personagens não são dependentes da força física para superar seus inimigos (que é frequentemente o caso típico de thrillers de ação), mas dependem de suas capacidades mentais, seja pela inteligência lutando com um oponente formidável, ou por tentar se manter em perfeito estado psicológico. Uma das características nesse gênero é que o escritor/roteirista busca descrever os eventos do ponto de vista do personagem, sendo assim, na maioria das vezes, narrados em primeira pessoa, ou seja, o próprio personagem é quem conta a história.”
                </li><br>
                <li><b>Thriller Romântico</b>
                Subgênero no qual, além de algum mistério sendo desenvolvido e/ou investigado, há o desenrolar de uma situação amorosa, que, geralmente, está ligada ao suspense da trama.
                </li><br>
                </ul>
            <li><b>Young Adult</b>
            Gênero que abrange personagens normalmente entre 14 e 21 anos. “Separa-se de Literatura Infanto-Juvenil por deixar de lado a ingenuidade dos protagonistas e concentrar-se em temáticas mais adultas”. Pode estar associado a diversos outros gêneros, como os Chick-Lits, Romances, Literatura Fantástica, Sick-Lits, etc. Conforme esclarecido, os livros de temática/narrativa mais intensa com personagens acima de 16/17 anos podem ser considerados, no blog, como New Adults.
            </li>
        </ul>
        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h6>AIONE SIMÕES<h6></div>
        </div>
    </div>

@endsection