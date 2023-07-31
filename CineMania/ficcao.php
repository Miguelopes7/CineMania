<?php
include "header.php";
?>

<section class="container" id="galeria">
    <div class="row">
        <div class="col p-0" id="section_col"> 
            <h2>Categoria - Ficção Científica</h2>
        </div>
    </div> 
    <div class="row">
        <?php

        $imagens = array(
            array("Interstellar","capas/Interstellar_capa.webp", "Uma emocionante jornada espacial que explora a luta da humanidade pela sobrevivência em um futuro distante, onde um grupo de astronautas embarca em uma missão arriscada para encontrar um novo lar para a humanidade além do sistema solar.<br>Quote: The only way to discover the limits of the possible is to go beyond them into the impossible.<br>Quote 2: Love is the one thing that transcends time and space.", "fig-Interstellar"),
            array("E.T. - O Extraterrestre","capas/et_capa.webp", "Um icônico filme de Steven Spielberg que narra a emocionante aventura de amizade entre um jovem chamado Elliott e um adorável extraterrestre perdido na Terra.<br>Juntos, eles superam as barreiras da comunicação e unem laços de amizade que ultrapassam os limites do universo.<br>Quote: E.T. phone home.", "fig-et"),
            array("Parque Jurássico<br>Jurassic Park","capas/jurassicpark_capa.webp", " Uma aventura épica repleta de dinossauros que ganham vida, levando os espectadores a um parque temático onde a maravilha e o perigo colidem.", "fig-jurassicpark"),
            array("Rampage","capas/rampage_capa.webp", "O Grande Encontra Algo Maior", "fig-rampage"),
            array("A Origem<br>Inception","capas/inception_capa.webp", "A jornada hipnotizante além dos sonhos, onde a realidade é apenas o começo.<br>Quote: Qual é o parasita mais resistente? Uma ideia.", "fig-inception", "Inception"),
            array("Planeta dos Macacos: A Origem<br>Rise Of The Planet Of The Apes","capas/RiseOfThePlanetOfTheApes_capa.webp", "Um filme de ficção científica intenso e provocador que explora as origens da rebelião dos macacos e o surgimento de sua inteligência. <br>Quote: Macacos, unidos, fortes!", "fig-RiseOfThePlanetOfTheApes", "RiseOfThePlanetOfTheApes"),
            array("Matrix","capas/matrix_capa.webp", "Uma realidade virtual que desafia todas as noções da existência humana.<br>Quote: A Matrix está em todo o lado, está à nossa volta, até agora mesmo neste quarto. Podes vê-la quando olhas pela janela ou quando ligas a televisão.<br>Podes senti-la quando vais para o trabalho, quando vais à igreja, quando pagas os teus impostos. É o mundo que te foi posto à frente dos olhos para te cegar da verdade.", "fig-matrix", "Matrix"),
            array("Guardiões da Galáxia Vol. 3","capas/guardioesgalaxiavol3_capa.png", "O encerramento da trilogia iniciada em 2014, os Guardiões da Galáxia reúnem-se mais uma vez para defender o universo.<br>Agora, porém, falhar nessa missão pode significar o fim da equipa de uma vez por todas.", "fig-guardioesvol3"),
            array("The Flash","capas/theflash_capacinemas.webp", "Flash quebra o multiverso ao tentar mudar o fatídico dia em que sua mãe é assassinada.", "fig-theflash"),
            array("Transformers: O Despertar das Feras","capas/Transformers_capacinemas.webp", "Transformers: O Despertar das Feras é a sétima parcela da série de filmes Transformers,<br>servindo como uma sequência autônoma de Bumblebee (2018) e prequela de 2007, Transformers - O Filme.", "fig-transformers")
            
        );
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
</section>  <!-- Fim Secção -->

<?php
include "footer.php";
?>