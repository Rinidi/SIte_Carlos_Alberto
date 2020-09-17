<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="iH9YsbQP"></script>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo"
                     src="<?= base_url("img/vetores/logo-azul.png"); ?>"
                     alt="Logo psd com fundo azul"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PSD</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Notícias
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                </ul>
                <!--<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>-->
            </div>
        </div>
    </nav>
</header>
<section class="carrossel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <!--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("img/banners/carrossel.png")?>" class="d-block w-100" alt="...">
            </div>
            <!--<div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!--<section class="banner">
    <div class="banner__container">
        <div class="banner__images">
            <img src="<?= base_url("img/vetores/wave-2.png")?>"
                 alt="Candidato Carlos do posto" class="img-fluid banner__wave ">
            <img src="<?= base_url("img/candidatos/carlos-transparente.png")?>"
                 alt="Candidato Carlos do posto" class="img-fluid banner__carlos">
        </div>
        <div class="banner__content">
            <div class="banner__box">
                <div class="banner__titulo">
                    <p class="banner__subtext pref">pré-candidato a prefeito</p>
                    <h1 class="banner__text carlos">CARLOS</h1>
                    <h1 class="banner__text posto">DO POSTO</h1>
                </div>
                <div class="banner__titulo">
                    <p class="banner__subtext vice">pré-candidato a vice-prefeito</p>
                    <h1 class="banner__text aldo">ALDO SILVEIRA</h1>
                </div>
            </div>
            <div class="banner__side">
                <p class="banner__numero">55</p>
                <div class="banner__logos">
                    <img src="<?= base_url("img/vetores/logo-transparente.png")?>"
                         alt="Logo PSD" class="img-fluid" width="100px">
                    <img src="<?= base_url("img/vetores/logo-partido-progressista.png")?>"
                         alt="Logo PSD" class="img-fluid" width="100px">
                </div>
            </div>
        </div>
    </div>
</section>-->
<section class="sobre">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 class="sobre__titulo titulo">Sobre Carlos do Posto</h3>
                <p class="container sobre__paragrafo texto">
                    Carlos Alberto Morais, mais conhecido como CARLOS DO POSTO é pré-candidato à Prefeito de Brazópolis - MG.<br/>
                    Natural de Portugal (1958), veio para o Brasil em 1979 e para Brazópolis em 1983. Carlos também é empresário  no ramo de combustíveis, casado e pai de 3 filhos.
                </p>
            </div>
            <div class="col-10 col-xl-5 col-lg-6 col-md-7 col-sm-8">
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/EBxlWoAV7VA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-10 col-xl-10 col-lg-6 col-md-7 col-sm-8">
            </div>
        </div>
    </div>
</section>
<section class="propostas">
    <div class="container">
        <h3 class="propostas__titulo titulo">Veja minhas propostas</h3>
        <a href="" class="btn propostas__botao">Baixar</a>
    </div>
</section>
<section class="noticias">
    <div class="container">
        <h3 class="noticias__titulo titulo">Notícias recentes</h3>
        <p class="noticias__paragrafo texto">
            Veja as principais notícias sobre a minha pré-campanha!
        </p>
    </div>
    <div class="container noticias__box">
        <div class="row justify-content-around">
            <?php  $a=0; while ($a<4){?>
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-10 noticia__item">
                    <a href="#">
                        <div class="noticias__noticia">
                            <img src="https://via.placeholder.com/150" alt="noticia">
                            <div class="noticias___noticia__texto">
                                <p class="noticias___noticia__data">13/09/2020</p>
                                <h4 class="noticias___noticia__titulo">Título de notícia</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $a++;} ?>
        </div>
    </div>
</section>
<section class="sociais">
    <div class="container">
        <h3 class="sociais__titulo titulo">Me acompanhe nas redes sociais</h3>
        <div class="sociais__redes">
            <a class="sociais__icon" href="https://www.facebook.com/carlosdoposto2020">
                <img class="sociais__logo facebook"
                     src="<?= base_url("img/vetores/facebook-logo.svg"); ?>">
            </a>
            <a class="sociais__icon" href="https://www.youtube.com/channel/UCmUWoK23ueyaux1fL7dYxNg">
                <img class="sociais__logo youtube"
                     src="<?= base_url("img/vetores/youtube.svg"); ?>">
            </a>
        </div>
    </div>
</section>
<section class="contato">
    <div class="container">
        <div class="contato__box">
        <h3 class="contato__titulo titulo">Fale Conosco</h3>
        <p class="contato__paragrafo texto">
            Entre em contato conosco, deixe sua dúvida ou sugestão <br/>
            Queremos te ouvir!
        </p>
        </div>
        <div class="row justify-content-center contato__form-box">
            <div class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-10">
                <form contato__form>
                    <div class="form-group">
                        <label class="contato__label" for="assunto">Assunto</label>
                        <input id="assunto" class="form-control" type="text" placeholder="Default input">
                    </div>
                    <div class="form-group">
                        <label class="contato__label" for="nome">Nome</label>
                        <input id="nome" class="form-control" type="text" placeholder="Default input">
                    </div>
                    <div class="form-group">
                        <label class="contato__label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label class="contato__label" for="mensagem">Mensagem</label>
                        <textarea class="form-control" id="mensagem" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer class="rodape">
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-12 col-xl-3 col-lg-3 col-md-4 col-sm-4">
                <img src="<?= base_url("img/vetores/logo-azul.png"); ?>"
                     alt="Logo PSD"
                     class="img-fluid rodape__psd">
            </div>
            <div class="col-12 col-xl-4 col-lg-3 col-md-4 col-sm-4">
                <h3 class="rodape__titulo">
                    Informações
                </h3>
                <p class="rodape__texto">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi fugiat officiis veniam vitae. Alias asperiores cumque ea exercitationem fugit illum inventore molestias porro quas quidem repellat sapiente, vel voluptates!
                </p>
            </div>
            <div class="col-12 col-xl-3 col-lg-3 col-md-4 col-sm-4 rodape__texto">
                Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
            </div>
        </div>
    </div>
</footer>
