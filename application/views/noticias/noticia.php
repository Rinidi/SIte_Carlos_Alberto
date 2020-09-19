<section class="noticia">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-4">
                <img src="<?= base_url("img/noticias/{$noticia['caminho']}/1.jpg");?>" alt="" class="img-fluid">
            </div>
            <div class="col-8">
                <div class="row justify-content-around">
                    <div class="col-12">
                        <h4 class="noticias___noticia__titulo"><?= $noticia['titulo']?></h4>
                    </div>
                    <div class="col-12">
                        <h4 class="noticias___noticia__descricao"><?= $noticia['descricao']?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php for ($i=1; $i<=$qtdArquivos; $i++):?>
            <div class="col-12 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <img src="<?= base_url($diretorio."/".$i.".jpg")?>"
                     alt="noticias"
                     class="img-fluid">
            </div>
            <?php endfor;?>
        </div>
</section>