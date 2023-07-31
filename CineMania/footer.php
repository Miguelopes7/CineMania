<!-- 
    Para habilitar a base de dados e poder registar emails / detetar emails registados, usar a 1x o install.php 
    Em alternativa, poderá ir buscar o form sem BD á parte dos scripts desta página e substituir pelo form atual na newsletter abaixo.
-->
<footer class="rodape">
        <div class="copyright">© CineMania 2023</div>
        <div class="newsletter">
            <div class="col-4 col-md-6 col-lg-7">
                <h2>Inscreva-se agora</h2>
                <h3>Receba novidades, dicas e muito mais</h3>
            </div>
            <div class="col-7 col-md-7 col-lg-7">
                <!-- Form com BD (Basedados) -->
                <div class="mensagemClass"><?php echo $mensagemFeedback; ?></div>
                <form class="form_signup" method="POST" action="" enctype="multipart/form-data">
                    <input type="email" name="text_email" id="emailInput" required placeholder="Seu email">
                    <input type="submit" name="btn_submit" id="inputRegistar" value="Registar">
                </form>
            </div>
        </div>
        <div class="social-icons">
            <h4>Siga-nos</h4>
            <a class="btn btn-redesocial" id="btn_fb" style="background-color: #3b5998;" role="button" href="https://fb.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-redesocial" id="btn_twitter" style="background-color: #55acee;" role="button" href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a class="btn btn-redesocial" id="btn_yt" style="background-color: #ed302f;" role="button" href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a class="btn btn-redesocial" id="btn_insta" style="background-color: #ac2bac;" role="button" href="https://www.instagram.com/migu3l.lopes/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a class="btn btn-redesocial" id="btn_tiktok" style="background-color: black;"   role="button" href="https://www.tiktok.com" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
            <a class="btn btn-redesocial" id="btn_linkedin" style="background-color: #0082ca;" role="button" href="https://www.linkedin.com/in/miguel-lopes-850669271/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    
</footer>

    <script>
        const swiper = new Swiper('.swiper', 
        {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        Fancybox.bind("[data-fancybox]", { /* Utilizado na Galeria */
        // Your custom options
        });

        /* form sem BD
        <form class="form_signup" method="POST" action="signup.php?a=signup" enctype="multipart/form-data">
            <input type="email" name="text_email" id="emailInput" required placeholder="Seu email">
            <button onclick="registarEmail(event)" id="btnRegistar">Registar</button>
        </form>
        
        function registarEmail(event){
            event.preventDefault(); //evita que seja submetido o formulário

            var emailInput = document.getElementById('emailInput');
            emailInput.placeholder = "\tRegistado com sucesso!";
            emailInput.value = ''; // Limpa o valor do campo de email
            emailInput.classList.add('success-placeholder'); // Adiciona a classe para alterar a cor do placeholder
    
            setTimeout(function() {
                emailInput.classList.remove('success-placeholder'); // Remove a classe após alguns segundos
                emailInput.placeholder = 'Seu email';
            }, 3000); // Tempo em milissegundos (3000 = 3 segundos)
        }
        */

    </script>
</body>
</html>