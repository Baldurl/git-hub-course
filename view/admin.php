<!DOCTYPE html>
<html lang="pt-br">

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="" type="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link href="https://unpkg.com/progressive-image@1.2.0/dist/index.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/button.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <!--Título do Browser-->

    <title>TechJobs </title>

</head>

<body id="home">


<?php
require_once __DIR__ . '/../layouts/headerLogin.php';
$nome = $_SESSION['usuario']['nome'];
?>

<div class="main-cta">
    <article class="main-cta-banner">
        <div class="main-cta-banner-spacer">
            <p>Olá, <?php echo $nome; ?><br>Seja bem-vindo</p>
            <div class="col-md-12">
                <div class="card-body font-weight-bold">
                    <div class="form-group main-cta-banner-busca">
                        <form action="../vaga/consulta.php" method="POST">
                            <label for="vaga">
                                <h1>Pesquisar vagas</h1>
                            </label>
                            <input type="text" name="vaga" size="50" placeholder="Insira o nome da vaga"></input>
                            <span >
                                    <button type="submit" class=" btn-orange">Buscar</button>
                                </span>
                        </form>
                    </div>
                </div>
            </div>


            <!--            <div class="seta">
                            <i class="fa fa-arrow-down"></i>
                        </div>
                        <p><a href="#" class="saiba-mais">Saiba Mais</a></p>-->
        </div>
    </article>
</div>

<section class="main-blog">

    <div class="main-blog-header">
        <h2 class="aos-init aos-animate">
            Vagas em alta
        </h2>
        <div class="seta">
            <i class="fa fa-arrow-down"></i>
        </div>
    </div>

    <div class="main-blog-content">
        <?php require_once __DIR__ . '/../vaga/all.php'; ?>
    </div>

</section>


<!--<article class="opt-in">
    <div class="opt-in-content">
        <a href="#home" class="scrollup show-scroll">
            <i class="fa fa-arrow-up scrollup__icon"></i>
        </a>
    </div>
</article>
-->

<section class="main_optin">
    <div class="main_optin_content">
        <header>
            <h1>Ferramentas de Administrador
            </h1>
        </header>
        <article>
            <header>
                <a href="../usuarios/administrador/index.php" class="btn-blue">Funções</a>
            </header>
        </article>
    </div>
</section>


<section class="main-cursos">
    <div class="main-cursos-content" id="news">
        <header>
            <h2>Biblioteca de Cursos e Livros</h2>
        </header>
        <div class="box-cursos" id="app">
            <div class="box-cursos-content">

                <div class="box-single-cursos-content-links">
                    <p>

                        Indicamos alguns cursos e livros para você iniciar sua carreira na tecnologia! <br>
                        <li><a href="https://skillsforall.com" target="_blank" rel="external" style="color:
                             rgb(4, 185, 65);">Cursos da Cisco</a></li>
                        <li><a href="https://udemy.com" target="_blank" rel="external" style="color:
                             rgb(186,85,211);">Cursos da udemy</a></li>
                        <li><a href="https://web.dio.me/" target="_blank" rel="external" style="color: rgb(24, 130,
                             250);">DIO.</a></li>
                        <li><a href="https://workover.com.br/" target="_blank" rel="external" style="color:
                             rgb(109, 5, 66);">Workover</a></li>
                        <li><a href="https://www.cursoemvideo.com/cursos/" target="_blank" rel="external"
                               style="color:
                              rgb(38, 6, 218);">Curso em Video</a></li>
                        <li><a href="https://stg.ada.tech/sou-aluno" target="_blank" rel="external" style="color:
                                 rgb(4, 78, 1);">Ada-Tech</a></li>
                        <br>
                        <li><a href="https://drive.google.com/drive/folders/1AnNVHVEhmznbk9azvJSLPNATw23-uca5"
                               target="_blank" rel="external">
                                Livros<i class="fa fa-arrow-right"></i></a></li>
                        <br><br>

                        O maior inimigo do conhecimento não é a ignorância, é a ilusão do conhecimento. <br> –
                        <i>Stephen Hawking!</i>
                    </p>
                </div>
                <div class="box-single-cursos-content-imagem">
                    <img src="../assets/img/img-team.svg" alt="team">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="main-noticias">
    <div class="main-noticias-content" id="news">
        <div class="box-noticias">
            <div class="box-noticias-content">

                <div class="box-noticias-content">
                    <h2>Pensar Como um programador!!</h2>
                    <p>
                        Pensar como um programador: é usar a tecnologia como extensão das suas capacidades. É
                        uma
                        forma que você tem de usar o digital para resolver problemas e alcançar seus objetivos.
                    </p>
                    <p>
                        <a href="https://www.freecodecamp.org/portuguese/news/como-pensar-como-um-programador-licoes-de-resolucao-de-problemas/"
                           target="_blank" rel="external">Ver Mais <i class="fa fa-arrow-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="box-noticias">
            <div class="box-noticias">
                <div class="box-noticias-content">
                    <h2>Tecnologias & Hardwares</h2>
                    <p>
                        Conheça um dos maiores canais de tecnologia e hardware do país "Adrenaline".
                        Uma comunidade online com fonte de informação sobre Tecnologia, Hardware, jogos,
                        notícias,
                        artigos e análises de eletrônicos de consumo, gadgets, hardwares para computador e
                        games.
                    </p>
                    <p><a href="https://www.adrenaline.com.br/" target="_blank" rel="external">Ver Mais <i
                                    class="fa fa-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
        <div class="box-noticias">
            <div class="box-noticias">
                <div class="box-noticias-content">
                    <h2>Tecnologias & Hardwares</h2>
                    <p>
                        Conheça um dos maiores canais de tecnologia e hardware do país "Adrenaline".
                        Uma comunidade online com fonte de informação sobre Tecnologia, Hardware, jogos,
                        notícias,
                        artigos e análises de eletrônicos de consumo, gadgets, hardwares para computador e
                        games.
                    </p>
                    <p><a href="https://www.adrenaline.com.br/" target="_blank" rel="external">Ver Mais <i
                                    class="fa fa-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
        <div class="box-noticias">
            <div class="box-noticias">
                <div class="box-noticias-content">
                    <h2>Tecnologias & Hardwares</h2>
                    <p>
                        Conheça um dos maiores canais de tecnologia e hardware do país "Adrenaline".
                        Uma comunidade online com fonte de informação sobre Tecnologia, Hardware, jogos,
                        notícias,
                        artigos e análises de eletrônicos de consumo, gadgets, hardwares para computador e
                        games.
                    </p>
                    <p><a href="https://www.adrenaline.com.br/" target="_blank" rel="external">Ver Mais <i
                                    class="fa fa-arrow-right"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clear"></div>


<section class="main-team">
    <div class="main-team-header">
        <h2>Nossa equipe</h2>

    </div>


    <div class="main-team-box app">

        <div class="box-single-team">
            <div class="box-single-team-content">
                <h1>Lucas Caio</h1>
                <h3>Developer front-end</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, unde dicta ipsum
                    laborum
                    id
                    numquam placeat minima exercitationem tempora blanditiis tenetur temporibus! Repudiandae
                    officia corporis voluptatum rem ut perspiciatis. Fuga?
                </p>
                <div class="box-single-medias">
                    <i class="fa fa-2x fa-facebook"></i>
                    <i class="fa fa-2x fa-instagram"></i>
                    <i class="fa fa-2x fa-github"></i>
                </div>
            </div>
        </div>
        <div class="box-single-team">
            <div class="box-single-team-content">
                <h1>Jordan de Carvalho</h1>
                <h3>Developer back-end</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, unde dicta ipsum
                    laborum
                    id
                    numquam placeat minima exercitationem tempora blanditiis tenetur temporibus! Repudiandae
                    officia corporis voluptatum rem ut perspiciatis. Fuga?
                </p>
                <div class="box-single-medias">
                    <i class="fa fa-2x fa-instagram"></i>
                    <i class="fa fa-2x fa-github"></i>
                </div>
            </div>
        </div>

        <div class="box-single-team">
            <div class="box-single-team-content">
                <h1>Pedro Santana</h1>
                <h3>Developer Full-Stack</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, unde dicta ipsum
                    laborum
                    id
                    numquam placeat minima exercitationem tempora blanditiis tenetur temporibus! Repudiandae
                    officia corporis voluptatum rem ut perspiciatis. Fuga?
                </p>
                <div class="box-single-medias">
                    <i class="fa fa-2x fa-instagram"></i>
                    <i class="fa fa-2x fa-github"></i>
                </div>
            </div>
        </div>


        <!--   LINHA ANIMADA PARA SEPARAR CONTEÚDO
        <div class="box-single-team">
            <div data-aos="fade-up">
                <div class="line"></div>
                <div class="clear"></div>
            </div>
        </div>
         FIM DA LINHA-->

    </div>

</section>


<section class="grupo-icones">

    <div class="box-icones">
        <div class="box-single-icones">
            <i class="fa fa-5x fa-star"></i>
            <h3>55</h3>
            <p>prêmios</p>
        </div>
        <div class="box-single-icones">
            <i class="fa fa-5x fa-heart-o"></i>
            <h3>+180</h3>
            <p>clientes felizes</p>
        </div>
        <div class="box-single-icones">
            <i class="fa fa-5x fa-connectdevelop" aria-hidden="true"></i>
            <h3>20</h3>
            <p>anos de existênçia</p>
        </div>
        <div class="box-single-icones">
            <i class="fa fa-5x fa-bolt" aria-hidden="true"></i>
            <h3>24/24</h3>
            <p>horas de trabalho</p>
        </div>
        <div class="box-single-icones">
            <i class="fa fa-5x fa-map-marker"></i>
            <h3>+3</h3>
            <p>Agencias espalhadas pelo mundo</p>
        </div>

    </div>
</section>

<!-- INICIO DOBRA RODAPÉ -->

<section class="main_footer">

    <article class="main_footer_our_pages">
        <header>
            <h2>Nossas Páginas</h2>
        </header>
        <ul>
            <li><a href="../auth/index.php">Home</a></li>
            <li><a href="noticias.php">Notícias</a></li>
            <li><a href="equipe.php">Nossa Equipe</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </article>

    <article class="main_footer_links">
        <header>
            <h2>Links Úteis</h2>
        </header>
        <ul>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Aviso Legal</a></li>
            <li><a href="#">Termos de Uso</a></li>
        </ul>
    </article>

    <article class="main_footer_about">
        <header>
            <h2>Techjobs</h2>
        </header>
        <p>Mantenha-se atualizado com o mercado de trabalho. Desenvolva seu networking e trabalhe para construir o seu
            futuro</p>
    </article>
</section>
<footer class="main_footer_rights">
    <p>ETC - Todos os direitos reservados.</p>
</footer>
<!-- FIM DOBRA RODAPÉ -->


<a href="#home" class="scrollup show-scroll" id="scroll-up">
    <i class="fa fa-arrow-up scrollup__icon"></i>
</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/progressive-image@1.2.0/dist/index.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/main.js"></script>
<script>
    AOS.init({
        mirror: true
    });

    (function () {
        new Progressive({
            el: '#app',
            lazyClass: 'lazy',
            removePreview: true,
            scale: true
        }).fire()
    })()
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RDBD06ZRL9"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-RDBD06ZRL9');
</script>

</body>

</html>