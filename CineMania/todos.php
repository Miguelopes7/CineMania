<?php
include "header.php";
?>

<section class="container" id="galeria">
    <div class="row">
        <div class="col p-0" id="section_col"> 
            <h2>Todos os Filmes</h2>
        </div>
    </div> 
    <div class="row">

        <?php
        include "array_filmes.php";
        ?>
        
        <div class="container">
            <div class="row" id="div-galeria">
            <?php foreach ($imagens as $value){ ?>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <a href="imagens/<?= $value[1] ?>" data-fancybox="filmes" data-caption="<?= $value[2] ?>">
                    <figure>
                        <img src="imagens/<?= $value[1] ?>" alt="" class="img-fluid" id="<?= $value[3] ?>">
                        <figcaption id="<?= $value[0]?>"><?= $value[0] ?></figcaption>
                    </figure>
                    </a>
                </div>
            <?php } ?>
            </div>
        </div>
        
    </div> <!-- Fim da Linha -->
</section>  <!-- Fim Galeria -->

<?php
include "footer.php";
?>