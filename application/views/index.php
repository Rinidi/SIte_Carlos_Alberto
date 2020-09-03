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
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<section class="banner">
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
</section>


<!--<section>
    <div class="container d-flex justify-content-between">
        <div class="carlos">
            <img class="img-fluid" src="<?= base_url("img/carlos-transparente.png") ?>" alt="Carlos do posto">
        </div>
        <div class="texto">
            <p>
                Carlos Alberto Morais, mais conhecido como CARLOS DO POSTO, é o Prefeito Eleito de Brazópolis
            </p>
            <p>
                Carlos Alberto Morais (mais conhecido como CARLOS DO POSTO), nascido em Portugal.
                Em 1982 veio para Brazópolis, onde enraizou-se, casando e constituindo família.
                É empresário com experiência comprovada em administração e é o nome da Coligação
                “POR UMA BRAZÓPOLIS DIFERENTE"
                para concorrer à Prefeitura de Brazópolis.
            </p>
        </div>
    </div>
</section>-->

<footer>

</footer>
<!--<div id="wave">
    aaaa
</div>-->
