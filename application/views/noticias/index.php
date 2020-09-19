<section class="noticias">
    <div class="container">
        <h2 class="noticias__titulo titulo">Noticias recentes</h2>
        <div class="row justify-content-around">
            <?php foreach ($noticias as $noticia):?>
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-10 noticia__item">
                    <a href="../index.php/noticias/noticia/<?=$noticia['id']?>">
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
