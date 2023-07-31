<?php
include "header.php";
?>

<!-- 
    Jogo: Advinhar código RGB(red, green, blue) em que cada valor vai de 0 a 255.
    Regras explicadas no colorGame.js
-->
<main class="rgb">
    <h1><span id="colorDisplay">RGB</span><br><span id="pontuacaoText">Pontuação: <span id="pontuacaoDisplay"></span></span></h1>
    <div id="stripe">
        <button id="reset">Novas cores</button>
        <span id="message"></span>
        <div>
            <button class="mode" id="">Fácil</button>
            |
            <button class="mode" id="selected">Médio</button>
            |
            <button class="mode" id="">Difícil</button>
        </div>
    </div>
    <div id="container">
        <div class="quadrado"></div>
        <div class="quadrado"></div>
        <div class="quadrado"></div>
        <div class="quadrado"></div>
        <div class="quadrado"></div>
        <div class="quadrado"></div>
        <div class="quadrado"></div>
        <div class="quadrado"></div>
        <div class="quadrado" id="quadradoLast"></div>
    </div>
</main>

<script type="text/javascript" src="colorGame.js"></script>

<?php
include "footer.php";
?>