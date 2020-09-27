<section class="noticia">
    <div class="container noticia__box">
        <div class="row justify-content-start">
            <div class="col-11 col-xl-6 col-lg-6 col-md-7 col-sm-8">
                <img src="<?= base_url("img/secretarias/{$noticia['pasta']}/0.jpg");?>"
                     alt="Noticia imagem principal"
                     class="img-fluid noticia__imagem-principal">
            </div>
            <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-8">
                <div class="row justify-content-around">
                    <div class="col-12">
                        <h4 class="noticias__titulo titulo">Educação</h4>
                    </div>
                    <div class="col-12">
                        <h1 class="noticia__subtitulo">
                            VAMOS RELEMBRAR!
                        </h1>
                        <p class="noticia__descricao">
                            Em 2019 conseguimos adquirir brinquedos para a creche Cemei Jurecê Guimarães.
                            Conscientes da importância da educação, nosso compromisso é  o melhor para a educação de Brazópolis.
                        </p>
                        <h1 class="noticia__subtitulo">
                            PARQUINHOS NAS ESCOLAS
                        </h1>
                        <p class="noticia__descricao">
                            Em 2019, o Prefeito Carlos Morais acompanhou a chegada dos novos parquinhos nas Escolas Municipais
                        </p>
                        <ul class="noticia__lista">
                            <li class="noticia__item">Cônego Teodomiro,</li>
                            <li class="noticia__item">Coronel Francisco Braz,</li>
                            <li class="noticia__item">Dona Maria Carneiro Braz,</li>
                            <li class="noticia__item">Nossa Senhora Aparecida,</li>
                            <li class="noticia__item">Joaquim Raimundo Braga,</li>
                            <li class="noticia__item">Altino Pereira Rosa</li>
                        </ul>
                        <p class="noticia__descricao">
                            e na Escola Inácio João de Farias, de Cruz Vera.
                            Esse equipamento foi escolhido cuidadosamente para que os alunos possam desfrutar, com todo conforto e segurança, dos seus momentos de lazer.
                        </p>
                        <h1 class="noticia__subtitulo">
                            Vamos relembrar!!
                        </h1>
                        <p class="noticia__descricao">
                            Aquisição de móveis para Escola Municipal Joaquim Raimundo Braga, bairro Bom Sucesso, no ano de 2019.
                            Nosso compromisso é o melhor para a educação de Brazópolis!
                        </p>
                        <h1 class="noticia__subtitulo">
                            TBT EDUCAÇÃO
                        </h1>
                        <p class="noticia__descricao">
                            Conseguimos para Brazópolis 3 ônibus escolares zero quilômetro.
                            1 veículo foi adquirido no ano de 2017 e 2 veículos em 2018.
                            O Transporte Escolar do nosso município ficou reforçado e com melhores condições para nossos estudantes.
                        </p>
                        <h1 class="noticia__subtitulo">
                            REFORMA DE ESCOLAS MUNICIPAIS
                        </h1>
                        <p class="noticia__descricao">
                            Pensando no melhor para nossos estudantes e equipe de educação, conseguimos realizar a reforma de 4 escolas municipais:
                        </p>
                        <ul class="noticia__lista">
                            <li class="noticia__item">Escola Altino Pereira Rosa</li>
                            <li class="noticia__item">Escola Nsa. Sra. Aparecida</li>
                            <li class="noticia__item">Escola Conego Teodomiro</li>
                            <li class="noticia__item">Escola Maria Carneiro Braz</li>
                        </ul>
                        <p class="noticia__descricao">
                            Entre os serviços executados estão: troca de forro de salas, troca de piso, substituição de janelas, pintura, adaptação de ambientes para acessibilidade, reforma de banheiros entre outros.
                            As obras foram realizadas com recurso próprio do município, fruto de um trabalho sério, onde pudemos administrar com responsabilidade esses recursos  e promover benefícios para o setor de educação.
                        </p>
                        <h1 class="noticia__subtitulo">
                            QUADRAS POLIESPORTIVAS
                        </h1>
                        <p class="noticia__descricao">
                            As obras das quadras estavam PARADAS!
                            Nós regularizamos os processos que estavam inadequados e concluímos as obras que eram objeto de convênio.
                            Quadra no B. Alto da Glória
                            Quadra no Distrito de Luminosa
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="row noticia__imagens">
            <div class="col-12">
                <h3 class="noticia__imagens__titulo titulo">Imagens</h3>
            </div>
            <?php for ($i=1; $i<$qtdArquivos; $i++):?>
                <div class="col-12 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <a href="<?= base_url($diretorio."/".$i.".jpg")?>"
                       data-toggle="lightbox" data-gallery="img-gallery">
                        <img src="<?= base_url($diretorio."/".$i.".jpg")?>"
                             alt="noticias"
                             class="img-fluid noticia__imagem">
                    </a>
                </div>
            <?php endfor;?>
        </div>-->
        <div class="container-fluid noticia__imagens">
            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <?php for ($i=1; $i<$qtdArquivos; $i++):?>
                    <div class="carousel-item col-md-4 <?php if($i == 1){echo "active";}?>">
                        <a href="<?= base_url($diretorio."/".$i.".jpg")?>"
                           data-toggle="lightbox" data-gallery="img-gallery">
                            <img src="<?= base_url($diretorio."/".$i.".jpg")?>"
                                 alt="noticias"
                                 class="img-fluid noticia__imagem">
                        </a>
                    </div>
                    <?php endfor;?>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
</section>