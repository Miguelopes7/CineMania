<?php
include "header.php";
?>

<section class="container" id="galeria">
    <div class="row">
        <div class="col p-0" id="section_col"> 
            <h2>Categoria - Comédia</h2>
        </div>
    </div> 
    <div class="row">
        <?php

        $imagens = array(
            array("Os Fura Casamentos<br>Wedding Crashers","capas/OsFuraCasamentos_capa.webp", "Uma comédia hilariante que segue a história de dois amigos, John e Jeremy, que têm a estranha tradição de se infiltrar em casamentos sem serem convidados. No entanto, as coisas se complicam quando um deles se apaixona por uma das noivas.<br>Quote: Rule #76: No excuses, play like a champion!", "fig-OsFuraCasamentos"),
            array("The Truman Show","capas/TheTrumanShow_capa.webp", "Truman começa a questionar sua realidade e embarca em uma jornada para descobrir a verdade por trás de sua existência, desafiando os limites do controle e da liberdade.<br>Quote: We accept the reality of the world with which we are presented.", "fig-TheTrumanShow"),
            array("Marley & Eu<br>Marley & Me","capas/Marley&Eu_capa.webp", "Uma adorável comédia-dramática: Através dos altos e baixos da vida, Marley ensina lições valiosas sobre amor, lealdade e a importância de aproveitar cada momento.<br>Quote: A dog doesn't care if you're rich or poor, educated or illiterate, clever or dull. Give him your heart and he will give you his.", "fig-Marley&Eu"),
            array("Forrest Gump","capas/forrest_capa.webp", "Uma história extraordinária sobre um homem simples, mas de coração puro, que supera desafios e deixa uma marca indelével nas vidas daqueles ao seu redor, enquanto narra sua jornada através das décadas e acontecimentos históricos.<br>Quote: Life is like a box of chocolates. You never know what you're gonna get", "fig-forrest"),
            array("Piratas das Caraíbas<br>Pirates Of The Caribbean","capas/PiratasdasCaraibas_capa.webp", "Uma história épica de piratas que combina ação, comédia e elementos sobrenaturais enquanto o Capitão Jack Sparrow e sua tripulação embarcam em uma jornada para quebrar a maldição que assombra o navio Pérola Negra.", "fig-piratesofthecaribbean"),
            array("O Lobo de Wall Street","capas/lobowallstreet_capa.webp", "Baseado na história real de Jordan Belfort, um corretor de valores ambicioso que se torna um dos nomes mais conhecidos de Wall Street. <br>O filme retrata sua ascensão meteórica e sua vida extravagante, repleta de festas, drogas e luxo, enquanto ele constrói um império financeiro ilegal..<br>Quote: A única coisa que te impede de alcançar o teu objetivo é a história que continuas a contar a ti mesmo.", "fig-lobowallstreet", "LoboWallStreet"),
            array("Super Mario Bros","capas/SuperMarioBros_capaCinemas.webp", "Após se encontrar no Reino dos Cogumelos e seu irmão ser raptado pelo Rei dos Koopas, Mario embarca em uma viagem para salvar todo o reino e Luigi.<br>Ele ainda estará companhado de Toad, Princesa Peach e Donkey Kong.", "fig-supermariobros"),
            array("Elementos","capas/Elementos_capacinemas.webp", "Em uma sociedade em que os quatro elementos da natureza vivem em harmonia, uma jovem mulher do elemento fogo<br>e um tranquilo rapaz do elemento água acabam por se conhecer, e percebem que têm muito mais em comum do que achavam.", "fig-elementos")

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