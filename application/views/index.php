<section class="carrossel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url("img/banners/banner-1-carlos-aldo.png")?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("img/banners/banner-2-vereadores.png")?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url("img/banners/banner-3-vereadores.png")?>" class="d-block w-100" alt="...">
            </div>
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
            <?php foreach ($noticias as $noticia):?>
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-10 noticia__item">
                    <a href="index.php/noticias/noticia/<?=$noticia['id']?>">
                        <div class="noticias__noticia">
                            <img width="150px"
                                 class="img-fluid"
                                 src="<?=base_url("img/noticias/{$noticia['pasta']}/1.jpg");?>"
                                 alt="noticia">
                            <div class="noticias___noticia__texto">
                                <p class="noticias___noticia__data"><?= dataMysqlParaPtBr($noticia['data']);?></p>
                                <h4 class="noticias___noticia__titulo"><?= $noticia['titulo']?></h4>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
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
                        <input id="assunto" class="form-control" type="text" placeholder="Assunto">
                    </div>
                    <div class="form-group">
                        <label class="contato__label" for="nome">Nome</label>
                        <input id="nome" class="form-control" type="text" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label class="contato__label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
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
