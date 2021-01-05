<DOCTYPE html>

<html lang="pt-BR">

    <head>
        <title>Página teste acessibilidade</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css.css" />
        <script>
            window.onload = function() {
                var elementBody = document.querySelector('body');
                var elementBtnIncreaseFont = document.getElementById('increase-font');
                var elementBtnDecreaseFont = document.getElementById('decrease-font');
                // Padrão de tamanho, equivale a 100% do valor definido no Body
                var fontSize = 100;
                // Valor de incremento ou decremento, equivale a 10% do valor do Body
                var increaseDecrease = 10;

                // Evento de click para aumentar a fonte
                elementBtnIncreaseFont.addEventListener('click', function(event) {
                    fontSize = fontSize + increaseDecrease;
                    elementBody.style.fontSize = fontSize + '%';
                });

                // Evento de click para diminuir a fonte
                elementBtnDecreaseFont.addEventListener('click', function(event) {
                    fontSize = fontSize - increaseDecrease;
                    elementBody.style.fontSize = fontSize + '%';
                });
            }
        </script>
    </head>

    <body>
        <div class="container">

            <div class="btn-container">
                <button name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
                <button name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
            </div>

            <header>
                <h1>KPOP</h1>
            </header>

            <div class="flex-container">

            <nav>
                <ul class="list">
                    <li class="menuitem"><a href="#">Artistas</a></li>
                    <li class="menuitem"><a href="#">Músicas</a></li>
                    <li class="menuitem"><a href="#">Grupos</a></li>
                    <li class="menuitem"><a href="#">Empresas</a></li>
                </ul>
            </nav>

            <main>
                <h2> História do Kpop </h2>
                <p class="aling">
                    O propósito do k-pop é justamente esse: ficar na cabeça ad eternum, com batidas e misturas com outros gêneros, como rap, rock, música eletrônica, e também o pop americano. Esse produto vem "embalado" com exatamente tudo que a meninada gosta: rostinhos bonitos, bem vestidos, muito talentosos e, claro, dancinhas contagiantes.

                    Então, vamos começar pelo início de tudo, nos anos 1990. Naquela década, o k-pop ainda era um embrião, e foi amadurecendo graças ao surgimento de um artista em questão, o sul-coreano Seo Taiji, hoje com 47 anos. Ele fazia parte do grupo conhecido como Seo Taiji and Boys, que fez sucesso imediato em 1992 — apesar de não agradar muito a crítica.

                    Antes disso, em 1988, os cidadãos do país tinham restrições de viagens e de acesso a conteúdo estrangeiro. Isso explica porque, durante muito tempo, a música sul-coreana era apenas influenciada pelo folclore do próprio país e pela cultura japonesa.
                </p>
                <p class="aling">
                    Não existe uma data exata para dar conta do surgimento do k-pop, mas a maioria dos pesquisadores atribuem o surgimento do gênero a partir do trio formado por Seo, Yang Hyun-suk e Lee Juno. Depois dele, uma avalanche de artistas e grupos surgiram, sendo gerenciados por empresas e gravadoras grandes — como a SM Entertainment, YA Entertainment e a JYP Entertainment—, responsáveis por criarem a cultura dos "idols", como são conhecidos os atos de k-pop hoje em dia.

                    A massificação do gênero, assim como tudo, tem prós e contras. Pelo lado positivo, bandas de k-pop começaram a explodir logo na estreia, graças ao exaustivo trabalho de divulgação. Por outra perspectiva, os artistas estavam atrelados a contratos um tanto restritivos, que proibiam a exposição de relacionamentos amorosos, longas jornadas de trabalho e total disposição para os desejos dos fãs.

                    Uma curiosidade sobre o k-pop é que os artistas do gênero começam a ser "caçados" logo na adolescência, assim como a Disney, americana, faz com seus prodígios. Isso fez com que alguns artistas desenvolvessem problemas severos durante a adolescência.
                </p>
                <p class="aling">
                    Após o surgimento do trio Seo Taiji and Boys, em 1992, outro grupo bombou nas paradas sul-coreanas, o H.O.T., em 1996. A boy band tinha basicamente todas as características dos artistas de k-pop dos dias de hoje: dançam, cantam, são bonitos e populares. Eles influenciaram a geração seguinte, que tem como destaque o BTS, boy band mais popular do mundo.

                    Nos anos 2000, atos como o Shinhwa e Fin.K.L. estavam dominando a cena de k-pop. Eles, assim como o H.O.T. eram considerados como "experimentos" de uma fórmula que seria aperfeiçoada ao longo dos anos, com grupos como B.A.P. e Apink.

                    Outra grande estrela dessa época foi a cantora BoA, considerada a "rainha do k-pop". Ela ajudou a abrir as portas da indústria para as mulheres, vistas como potenciais "produtos" para serem investidos.
                </p>
                <p class="aling">
                    Seguindo essa linha, surgiram as girl bands, como a Girls 'Generation, 2NE1 e Wonder Girls. O sucesso destas garotas foi tão grande que influenciou a criação de outros grupos femininos, como o Blackpink — que você pode conhecer melhor clicando aqui. A indústria americana, percebendo o crescimento do k-pop, não demorou muito para começar a absorvê-lo. Lá em 2009, as Wonder Girls foram convidadas para tocarem na turnê dos Jonas Brothers pelos EUA.

                    Em 2012, um certo Psy chegou com tudo com seu hit de k-pop "Gangnam Style". Foi o vídeo mais assistido daquele ano no YouTube, ultrapassando "Baby", de Justin Bieber. Ainda assim, Psy não é considerado um "idol" do gênero, uma vez que o cara é "engraçado demais" para se encaixar em padrões de beleza e comportamento tão rígidos. Mas isso é outro assunto. Graças também a "Gangnam Style", os anos 2010 foram completamente dominados pelo k-pop no mundo inteiro. E, como já citamos acima, um grupo em questão foi extremamente essencial para isso: o BTS.
                </p>
                <img src="kpop.jpg" alt="Imagem ilustrativa kpop" />
            </main>

            <aside>
                <h2>Início de tudo:</h2>
                <p>1990</p>
                <h2>Empresa com mais influência atualmente:</h2>
                <p>Big Hit Entertainment</p>
                <h2>Grupo com mais influência atualmente:</h2>
                <p>BTS</p>
            </aside>


        </div>
    </body>

</html>