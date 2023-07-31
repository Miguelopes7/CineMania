<?php
include "header.php";
?>

<section class="container" id="sobrenos">
    <div class="row">
        <div class="col p-0" id="section_col"> 
            <h2>Sobre Nós</h2>
        </div>
    </div> 
    <div class="row">
        <div class="col-12 col-sm-10 col-md-6 sobrenos_div_img">
            <img src="imagens/sala_cinema_logo.webp" alt="Sala de Cinema">
        </div>
        <div class="col-12 col-sm-10 col-md-6">
            <br>
            <p>
                Somos apaixonados por cinema e estamos dedicados a compartilhar a nossa paixão com vocês. 
                Aqui, vocês encontrarão informações detalhadas sobre os filmes mais recentes, além dos nossos favoritos de todos os tempos. 
                Esperamos que vocês os apreciem tanto quanto nós. 
            </p>

            <p> 
                Nós acreditamos que o cinema é uma forma de arte única, que tem o poder de nos transportar para mundos imaginários, nos emocionar, nos fazer rir e nos fazer refletir sobre a vida e o mundo ao nosso redor. 
                Por isso, queremos compartilhar com vocês nossa paixão e conhecimento sobre o mundo do cinema. 
            </p>
            <br>
        </div>
        <div class="col-12 col-sm-10 col-md-12"> 
            <p>No CineMania, vocês encontrarão sinopses, trailers e reviews detalhadas sobre os filmes mais recentes.</p>

            <p> 
                Não deixem de conferir as sessões de cinema mais próximas e as nossas recomendações de filmes para assistir em casa. 
                Temos a certeza de que vocês encontrarão algo de que gostem no nosso site. 
                Agradecemos pela vossa visita e esperamos que desfrutem do mundo do cinema tanto quanto nós! 
            </p>
        </div>
    </div>
</section>

<script>
    /* Altera o tipo letra conforme os parágrafos desejados */
    e = document.querySelectorAll("p"); 
    for(i = 2; i < 3; i++ ){
        e[i].style.fontFamily = "Arial Black";
    }
</script>

<?php
include "footer.php";
?>