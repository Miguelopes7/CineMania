<?php
include "header.php";
?>

<section class="container section" id="contactos">
    <div class="row">
        <div class="col p-0" id="section_col"> 
            <h2>Contactos</h2>
        </div>
    </div> 
    <div class="row">
        <div class="col-6 col-md-4 col">
            <p id="p_indica_contacto">Se quiser enviar alguma sugestão, ou correcção,<br>
            pode contactar-nos para o nosso email de contacto.</p>
            <p id="p_indica_formulario">Em alternativa, pode utilizar o seguinte formulário:</p>
        </div>
        <div class="col-6 col-md-4 col order-md-2" id="cinemania_contactos">
            <div id="cinemania_contactos_text">
                <h5 class="contactos-subtitle">CineMania Lisboa</h5>
                <p>R. Barata Salgueiro 39 <br>
                1269-059 Lisboa <br>
                email: <a href="mailto:cinemania.pt">geral@cinemania.pt</a></p>
                <p id="cinemania_contactos_extrainfo">Sempre que nos contactar, os seus dados serão usados exclusivamente para responder às informações solicitadas. Não serão mantidos em base de dados, transmitidos a terceiros, ou usados para qualquer outro tipo de comunicação por nós iniciada, que não esteja relacionada com o âmbito do contacto inicial. Os dados serão mantidos no nosso sistema de email durante o tempo que consideremos necessário para responder às questões colocadas ou para consulta de arquivo.</p>
            </div>
        </div>
        <div class="col-6 col-md-4 col order-md-1" id="formulario_contactos">
            <div>
            <form id="form_contactos" onsubmit="mostraForm();return false;">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Daniel Silva" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="danielsilva@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea type="text" class="form-control" id="mensagem" name="mensagem" cols="30" rows="10" placeholder="Escreva a sua mensagem aqui..." required></textarea>
                </div>
                    <button type="submit" class="btn btn-primary">Enviar mensagem</button>
            </form>
            </div>
        </div>
    </div>
</section> 

<?php
include "footer.php";
?>