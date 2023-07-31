<section class="container" id="galeria">
    <div class="row">
        <div class="col p-0" id="section_col"> 
            <h2>Top 12 CineMania</h2>
        </div>
    </div> 
    <div class="row"> <!-- Linha -->
        <?php

        $imagens = array(
            array("Matrix","capas/matrix_capa.webp", "Uma realidade virtual que desafia todas as noções da existência humana.<br>Quote: A Matrix está em todo o lado, está à nossa volta, até agora mesmo neste quarto. Podes vê-la quando olhas pela janela ou quando ligas a televisão.<br>Podes senti-la quando vais para o trabalho, quando vais à igreja, quando pagas os teus impostos. É o mundo que te foi posto à frente dos olhos para te cegar da verdade.", "fig-matrix", "Matrix"),
            array("John Wick","capas/john-wick_capa.webp", "Um implacável assassino de aluguel em busca de vingança após a morte do seu cão e o roubo do seu carro, enfrentando inimigos perigosos e revelando suas habilidades letais.<br>Quote: Eu já o vi matar três homens em um bar... com um lápis. Com um maldito lápis!", "fig-johnWick", "JohnWick"),
            array("Dia de Treinamento<br>Training Day","capas/trainingday_capa.webp", "Um intenso thriller policial que segue um dia na vida de um detetive veterano e corrupto que leva um recruta idealista para uma jornada perigosa pelas ruas de Los Angeles.<br>Quote: King Kong ain't got shit on me!", "fig-trainingday", "TrainingDay"),
            array("A Origem<br>Inception","capas/inception_capa.webp", "A jornada hipnotizante além dos sonhos, onde a realidade é apenas o começo.<br>Quote: Qual é o parasita mais resistente? Uma ideia.", "fig-inception", "Inception"),
            array("Hachiko - Amigo para Sempre","capas/hachiko_capa.webp", "Uma história comovente sobre lealdade e amor incondicional, inspirada na história verídica de um cão fiel que espera pelo seu dono todos os dias na estação de comboios.<br>Quote: Todos os dias, ele esperava pelo seu dono. E todos os dias, o seu dono não aparecia. Mas mesmo assim, ele esperava.", "fig-hachiko", "Hachiko"),
            array("À Procura da Felicidade<br>The Pursuit Of Happiness","capas/thepursuitofhappiness_capa.webp", "Baseado em uma história real, este inspirador drama conta a jornada emocional de Chris Gardner, um pai solteiro determinado a superar a adversidade e alcançar o sonho americano, enquanto cuida de seu filho pequeno.<br>Quote: Se tens um sonho, precisas protegê-lo. As pessoas não conseguem fazer algo por si mesmas, então elas tentam te convencer que tu também não consegues. Se queres algo, vai atrás. Ponto final.", "fig-thepursuitofhappiness", "ThePursuitOfHappiness"),
            array("Planeta dos Macacos: A Origem<br>Rise Of The Planet Of The Apes","capas/RiseOfThePlanetOfTheApes_capa.webp", "Um filme de ficção científica intenso e provocador que explora as origens da rebelião dos macacos e o surgimento de sua inteligência. <br>Quote: Macacos, unidos, fortes!", "fig-RiseOfThePlanetOfTheApes", "RiseOfThePlanetOfTheApes"),
            array("O Lobo de Wall Street","capas/lobowallstreet_capa.webp", "Baseado na história real de Jordan Belfort, um corretor de valores ambicioso que se torna um dos nomes mais conhecidos de Wall Street. <br>O filme retrata sua ascensão meteórica e sua vida extravagante, repleta de festas, drogas e luxo, enquanto ele constrói um império financeiro ilegal..<br>Quote: A única coisa que te impede de alcançar o teu objetivo é a história que continuas a contar a ti mesmo.", "fig-lobowallstreet", "LoboWallStreet"),
            array("Clube Da Luta<br>Fight Club","capas/fightclub_capa.webp", "Um filme provocativo e perturbador que segue a história de um homem desiludido que forma um clube clandestino onde homens lutam entre si como uma forma de escape e rebelião contra a sociedade moderna.<br>Quote: Não és o teu emprego. Não és o quanto dinheiro tens no banco. Não és o carro que conduzes. Não és o conteúdo da tua carteira.", "fig-fightclub", "FightClub"),
            array("Seven: Os Sete Crimes Capitais","capas/seven_capa.webp", "Um jogo macabro de perseguição aos limites da mente humana.", "fig-seven", "Seven"),
            array("Os Infiltrados<br>The Departed","capas/thedeparted_capa.webp", "Um jogo perigoso de lealdade e traição no submundo do crime.<br>Quote: Eu sou o tipo de gajo que faz o seu trabalho. Tu deves ser o outro tipo", "fig-thedeparted", "TheDeparted"),
            array("América Proibida<br>American History X","capas/americanhistoryx_capa.webp", "Uma poderosa reflexão sobre racismo, violência e a busca pela redenção.", "fig-americanhistoryx", "AmericanHistoryX")

            //template: array("Nome","capas/_capa.webp", "Descrição.<br>Quote: ", "fig-nome"),
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