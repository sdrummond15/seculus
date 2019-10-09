<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Seculus</title>
    <meta name="description" content="Show de Prêmios Seculus.">
    <meta name="author" content="SDrummond">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Show de Prêmios Seculus" />
    <meta property="og:description" content="Show de Prêmios Seculus.">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="450">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

<header id="header">

    <div id="menu">

        <div class="menu">
            <div class="main-menu">
                <ul>
                    <li><a href="#periodo">Como Participar</a></li>
                    <li><a href="#sorteio">Sorteios e Prêmios</a></li>
                    <li><a href="#ganhadores">Resultados</a></li>
                    <li><a href="#contato">Fale Conosco</a></li>
                    <li><a href="#numero_sorte"><span>Consulte Seu(s) Número(s) da Sorte</span></a></li>
                </ul>
            </div>
        </div>

        <div id="menuresp">
            <button title="button">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="responsive">
                <li><a href="#periodo">Como Participar</a></li>
                <li><a href="#sorteio">Sorteios e Prêmios</a></li>
                <li><a href="#ganhadores">Resultados</a></li>
                <li><a href="#contato">Fale Conosco</a></li>
                <li><a href="#numero_sorte">Consulte Seu(s) Número(s) da Sorte</a></li>
            </ul>
        </div>

    </div>

    <div id="slide">
        <img src="images/premios_seculus.png" alt="promocao seculus"/>
    </div>

</header>


<section id="marcas">

    <div class="marcas">

        <article>

            <ul>
                <li>
                    <img src="images/marcas/seculus.png" alt="seculus"/>
                </li>
                <li>
                    <img src="images/marcas/mondaine.png" alt="mondaine"/>
                </li>
                <li>
                    <img src="images/marcas/speedo.png" alt="speedo"/>
                </li>
                <li>
                    <img src="images/marcas/guess.png" alt="guess"/>
                </li>
                <li>
                    <img src="images/marcas/cassio.png" alt="cassio"/>
                </li>
            </ul>

        </article>

    </div>

</section>

<section id="periodo">

    <div class="periodo">

        <article>

            <h1>PERÍODO: DE 01/10 A 30/11/2019</h1>

            <div class="linha"></div>

            <h2>PARA PARTICIPAR:</h2>

            <div id="participar">

                <ul>
                    <li>
                        <img src="images/inscricao.png" alt="inscricao" />
                        <span>
                            A cada R$ 3.000,00 por pedido implementado, você estará apto a concorrer.
                        </span>
                    </li>
                    <li class="next">
                        <img src="images/next.png" alt="next" />
                    </li>
                    <li>
                        <img src="images/computador.png" alt="como fazer" />
                        <span>
                            Sistema da Promoção gera um ou mais números da sorte a partir do valor líquido do pedido.
                        </span>
                    </li>
                    <li class="next">
                        <img src="images/next.png" alt="next" />
                    </li>
                    <li>
                        <img src="images/email.png" alt="confirmacao" />
                        <span>
                            Voce receberá seu(s) números(s) da sorte por e-mail.
                        </span>
                    </li>
                </ul>

            </div>

            <div class="linha"></div>

        </article>



    </div>

</section>

<section id="sorteio">

    <div class="sorteio">

        <article>

            <div class="sorteio-semana">
                <h2>Sorteio com prêmios toda semana!</h2>
                <img src="images/sorteio_eletronicos.png" alt="sorteio eletronicos" />
                <div class="box-info">
                    <h3>16 e 26 de Outubro</h3>
                    <h3>02, 09, 16, 23 e 30 de Novembro</h3>
                    <ul>
                        <li>01 Smartphone</li>
                        <li>01 SmarTV</li>
                        <li>01 Caixa de som portátil</li>
                    </ul>
                </div>
            </div>

            <div class="sorteio-nacional">
                <h2>Sorteio Nacionais</h2>
                <div class="box-info">
                    <h3>02 de Novembro</h3>
                    <ul>
                        <li>01 Moto Honda</li>
                        <li>01 Vale-Viagem de R$8.000,00</li>
                        <li>01 Iphone</li>
                        <li>01 Ipad</li>
                    </ul>
                </div>
                <div class="imagem-sorteio">
                    <img src="images/sorteio_nacional.png" alt="sorteio nacional" />
                </div>
                <div class="box-info">
                    <h3>07 de Dezembro</h3>
                    <ul>
                        <li>01 Jeep Renegate</li>
                        <li>01 Moto Honda</li>
                        <li>01 Vale-Viagem de R$8.000,00</li>
                        <li>01 Iphone</li>
                        <li>01 Ipad</li>
                    </ul>
                </div>
            </div>

            <div class="linha"></div>

        </article>

    </div>

</section>

<section id="ganhadores">

    <div class="ganhadores">

        <article>

            <h1>CONFIRA AQUI OS GANHADORES DOS SORTEIOS</h1>

            <ul>
                <li>
                    <button type="button" class="btn-ganhadores" id="ganhadores-regionais">SORTEIOS REGIONAIS</button>
                </li>
                <li>
                    <button type="button" class="btn-ganhadores" id="ganhadores-nacionais">SORTEIOS NACIONAIS</button>
                </li>
            </ul>
            <div class="linha"></div>
            <div id="resultado-ganhadores">

            </div>


        </article>

    </div>

</section>
<section id="contato">

    <div class="contato">

        <article>

            <h3>Fale Conosco:</h3>

            <div id="retornoHTML">
                <form>
                    <fieldset>
                        <input id="nome" type="text" placeholder="Nome"><br>
                        <input id="email" type="email" placeholder="E-mail"><br>
                        <input id="phone" type="tel" placeholder="Telefone"><br>
                        <textarea id="msg" placeholder="Mensagem:"></textarea><br>
                        <input type="submit" id="btn" class="btn-contato" value="Enviar">
                        <div class="loading">
                            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                        </div>
                    </fieldset>
                </form>

            </div>

        </article>

        <div class="linha"></div>

    </div>

</section>

<section id="numero_sorte">

    <div class="numero-sorte">

        <article>

            <h3>Digite o CNPJ:</h3>
            <div>
                <form action="resultados.php" method="POST">
                    <fieldset>
                    <input type="text" name="search_cnpj" id="search_cnpj" placeholder="CNPJ" inputmode="numeric"/>
                    <input type="submit" id="btn" class="btn-numero-sorte" value="Buscar" />
                    </fieldset>
                </form>
            </div>

        </article>

    </div>

</section>

<footer>
        <p>&copy; 2019 por Seculus da Amazônia S/A
            Promoção interna válida para parceiros comerciais da Seculus da Amazônia, não aberta ao público em geral. Consulte regras de participação.</p>
</footer>

</body>

<script src="assets/js/jquery_1.9.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.noty.packaged.min.js"></script>
<script src="assets/js/jquery.maskedinput-1.1.4.pack.js"></script>
<script src="assets/js/jquery.inputmask.bundle.js"></script>
<script src="assets/js/script.js"></script>

</html>