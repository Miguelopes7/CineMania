<?php
include "header.php";
include "array_filmes.php";
include "array_reviews.php";

if(isset($_GET['filme'])) {
    $termo_pesquisa = $_GET['filme'];
    $resultados = array();
    $resultados_filmes = array();
    $resultados_reviews = array();
    $todos_filmes = array_merge($imagens, $imagens_reviews);
    foreach ($todos_filmes as $filme) {
        if (stripos($filme[0], $termo_pesquisa) !== false) {
            if ($filme[3] == "fig-review"){
                $resultados_reviews[] = $filme;
            } else{
                $resultados_filmes[] = $filme;
            }
        }
    }
    
    if (count($resultados_reviews) > 0 || count($resultados_filmes) > 0) {
        echo '<section class="container" id="galeria">';
        echo '<div class="row">';
        echo '<div class="col p-0" id="section_col">';
        echo '<h2>Resultados da Pesquisa: "' . $termo_pesquisa . '"</h2>';
        echo '</div>';
        echo '</div>';
        echo '<div class="row">';
        echo '<div class="container">';
        // Verifica se os resultados são do array de filmes ou de reviews
        if (count($resultados_reviews) > 0) {
            $resultados = $resultados_reviews;
            $resultados_origem = 'div-galeria_review';
        } else {
            $resultados = $resultados_filmes;
            $resultados_origem = 'div-galeria';
        }
        echo '<div class="row" id="'.$resultados_origem.'">';
    
        foreach ($resultados as $filme) {
            echo '<div class="col-lg-2 col-md-3 col-sm-4 col-6">';
            echo '<a href="imagens/' . $filme[1] . '" data-fancybox="filmes" data-caption="' . $filme[2] . '">';
            echo '<figure>';
            echo '<img src="imagens/' . $filme[1] . '" alt="" class="img-fluid" id="' . $filme[3] . '">';
            echo '<figcaption id="' . $filme[0] . '">' . $filme[0] . '</figcaption>';
            echo '</figure>';
            echo '</a>';
            // Verifica se os resultados são do array reviews
            if ($resultados_origem == 'div-galeria_review' && $filme[3] == 'fig-review') {
                echo '<div class="row" id="row_button_review">';
                echo '<div class="col">';
                echo '<a href="review'.$filme[4].'.php" class="btn btn-sm btn-primary-full"><span>Ver Review</span></a>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        }
    
        echo '</div>'; // Fim div-galeria
        echo '</div>'; // Fim container
        echo '</div>'; // Fim row
        echo '</section>'; // Fim galeria
    } else {
        echo '<section class="container">';
        echo '<div class="row">';
        echo '<div class="col p-0" id="section_col">';
        echo '<h2>Nenhum resultado encontrado para: "' . $termo_pesquisa . '"</h2>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    }
} else {
    echo '<section class="container">';
    echo '<div class="row">';
    echo '<div class="col p-0" id="section_col">';
    echo '<h2>Nenhum termo de pesquisa fornecido</h2>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
}

include "footer.php";
?>
