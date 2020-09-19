<section class="noticia">
    <div class="container noticia__box">
        <div class="row justify-content-around">
            <div class="col-11 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <img src="<?= base_url("img/noticias/{$noticia['pasta']}/1.jpg");?>"
                     alt="Noticia imagem principal"
                     class="img-fluid noticia__imagem">
            </div>
            <div class="col-12 col-xl-8 col-lg-8 col-md-8 col-sm-6">
                <div class="row justify-content-around">
                    <div class="col-12">
                        <h4 class="noticias__titulo titulo"><?= $noticia['titulo']?></h4>
                    </div>
                    <div class="col-12">
                        <h4 class="noticia__descricao"><?= auto_typography($noticia['descricao']);?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row noticia__imagens">
            <div class="col-12">
                <h3 class="noticia__imagens__titulo">Imagens</h3>
            </div>
            <?php for ($i=1; $i<=$qtdArquivos; $i++):?>
                <div class="col-12 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <img src="<?= base_url($diretorio."/".$i.".jpg")?>"
                         alt="noticias"
                         class="img-fluid noticia__imagem">
                </div>
            <?php endfor;?>
        </div>
        <?php if($noticia['link-video'] != null): ?>
        <div class="row justify-content-center noticia__video__box ">
            <div class="col-12">
                <h3 class="noticia__video__titulo titulo">Vídeo</h3>
            </div>
            <div class="col-12 col-xl-6 col-lg-7 col-md-8 col-sm-10">
                <iframe src="<?= $noticia['link-video']; ?>"
                        class="noticia__video"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
        <?php endif; ?>
</section>