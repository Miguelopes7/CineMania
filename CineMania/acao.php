<?php
include "header.php";
?>

<section class="container" id="galeria">
    <div class="row">
        <div class="col p-0" id="section_col"> 
            <h2>Categoria - Ação</h2>
        </div>
    </div> 
    <div class="row">
        <?php

        $imagens = array(
            array("John Wick","capas/john-wick_capa.webp", "Um implacável assassino de aluguel em busca de vingança após a morte do seu cão e o roubo do seu carro, enfrentando inimigos perigosos e revelando suas habilidades letais.<br>Quote: Eu já o vi matar três homens em um bar... com um lápis. Com um maldito lápis!", "fig-johnWick", "JohnWick"),
            array("Rampage","capas/rampage_capa.webp", "O Grande Encontra Algo Maior", "fig-rampage"),
            array("Batman: O Cavaleiro das Trevas","capas/batman_capa.webp", "Uma batalha épica entre a justiça e a escuridão.", "fig-batman"),
            array("Goodfellas","capas/goodfellas_capa.webp", "O submundo implacável dos gângsteres revelado em uma história de poder, traição e violência.", "fig-goodfellas"),
            array("Gladiador","capas/gladiador_capa.webp", "Uma épica batalha pela liberdade e vingança nos arenas da Roma Antiga.", "fig-gladiador"),
            array("Até O Último Homem | Hacksaw Ridge","capas/Ate_o_Ultimo_Homem_capa.webp", "A coragem desafiando a guerra, uma história real de heroísmo e sacrifício.", "fig-hacksaw"),
            array("Matrix","capas/matrix_capa.webp", "Uma realidade virtual que desafia todas as noções da existência humana.<br>Quote: A Matrix está em todo o lado, está à nossa volta, até agora mesmo neste quarto. Podes vê-la quando olhas pela janela ou quando ligas a televisão.<br>Podes senti-la quando vais para o trabalho, quando vais à igreja, quando pagas os teus impostos. É o mundo que te foi posto à frente dos olhos para te cegar da verdade.", "fig-matrix", "Matrix"),
            array("Dia de Treinamento<br>Training Day","capas/trainingday_capa.webp", "Um intenso thriller policial que segue um dia na vida de um detetive veterano e corrupto que leva um recruta idealista para uma jornada perigosa pelas ruas de Los Angeles.<br>Quote: King Kong ain't got shit on me!", "fig-trainingday", "TrainingDay"),
            array("Planeta dos Macacos: A Origem<br>Rise Of The Planet Of The Apes","capas/RiseOfThePlanetOfTheApes_capa.webp", "Um filme de ficção científica intenso e provocador que explora as origens da rebelião dos macacos e o surgimento de sua inteligência. <br>Quote: Macacos, unidos, fortes!", "fig-RiseOfThePlanetOfTheApes", "RiseOfThePlanetOfTheApes"),
            array("Clube Da Luta<br>Fight Club","capas/fightclub_capa.webp", "Um filme provocativo e perturbador que segue a história de um homem desiludido que forma um clube clandestino onde homens lutam entre si como uma forma de escape e rebelião contra a sociedade moderna.<br>Quote: Não és o teu emprego. Não és o quanto dinheiro tens no banco. Não és o carro que conduzes. Não és o conteúdo da tua carteira.", "fig-fightclub", "FightClub"),
            array("A Origem<br>Inception","capas/inception_capa.webp", "A jornada hipnotizante além dos sonhos, onde a realidade é apenas o começo.<br>Quote: Qual é o parasita mais resistente? Uma ideia.", "fig-inception", "Inception"),
            array("América Proibida<br>American History X","capas/americanhistoryx_capa.webp", "Uma poderosa reflexão sobre racismo, violência e a busca pela redenção.", "fig-americanhistoryx", "AmericanHistoryX"),
            array("Homem-Aranha: Através do Aranhaverso","capas/homemaranha_capa.webp", "Em Homem-Aranha: Através do Aranhaverso, Miles Morales, o simpático Homem-Aranha do Brooklyn, retorna para mais uma aventura no Aranhaverso.", "fig-homem-aranha"),
            array("Guardiões da Galáxia Vol. 3","capas/guardioesgalaxiavol3_capa.png", "O encerramento da trilogia iniciada em 2014, os Guardiões da Galáxia reúnem-se mais uma vez para defender o universo.<br>Agora, porém, falhar nessa missão pode significar o fim da equipa de uma vez por todas.", "fig-guardioesvol3"),
            array("The Flash","capas/theflash_capacinemas.webp", "Flash quebra o multiverso ao tentar mudar o fatídico dia em que sua mãe é assassinada.", "fig-theflash"),
            array("Indiana Jones e o Marcador do Destino","capas/IndianaJones_capacinemas.webp", "Sequência da franquia do famoso e aventureiro arqueólogo Indiana Jones (Harrisson Ford), em mais uma missão inesperada.", "fig-indianajones"),
            array("Velocidade Furiosa X","capas/VelocidadeFuriosa10_capacinemas.webp", "Décimo filme da série Velocidade Furiosa e último da nova trilogia (Velocidade 8, 9 e 10).", "fig-velocidadeX"),
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