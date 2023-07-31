document.addEventListener('DOMContentLoaded', function() { // Após carregamento do conteúdo HTML da página, quando o DOM está disponível
    navbarTogglerUnFocus() // Alterna o foco do navbar-toggler ao abrir/fechar o menu
    gallerySliderSwiper(); // Ativa navegação de setas em slider-swipers
})

window.onload = function () { // após carregamento total da página
    btDarkModeText();
}

// ********** FUNÇÕES **********

function gallerySliderSwiper() {
	var gallerySliderSwiper = new Swiper('.swiper-container', {
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		effect: "fade",
		fadeEffect: {
			crossFade: true
		},
	})
}

// API Youtube para auto-pause etc
function youtubeAPI(){
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}
function onYouTubeIframeAPIReady(id) {
	let player = document.querySelectorAll('[iframe-video]');
	let buttons = document.querySelectorAll('[video-buttons]');

	player.forEach(item => {
		var itemElem = item.dataset.videoLink;
		itemElem = new YT.Player(item, {
			videoId: '',
		});

		buttons.forEach(item => {
			item.addEventListener('click', function (e) {
				itemElem.pauseVideo(); // Pausar Videos Youtube
			});
		});
	})
}

function btDarkModeText() { // clique no botão darkmode
    const botaoDark = document.querySelector(".bt-darkmode");
    const darkMode = localStorage.getItem("darkmode");

    if (darkMode == 1) {
        botaoDark.innerHTML = "Light Mode";
        document.querySelector("html").setAttribute("data-bs-theme", "dark");
    } else {
        botaoDark.innerHTML = "Dark Mode";
        document.querySelector("html").setAttribute("data-bs-theme", "light");
    }

    botaoDark.addEventListener("click", function () {
        const eHTML = document.querySelector("html");
        const darkMode = localStorage.getItem("darkmode");

        if (darkMode == 1) {
            eHTML.setAttribute("data-bs-theme", "light");
            localStorage.removeItem("darkmode");
            botaoDark.innerHTML = "Dark Mode";
        } else {
            eHTML.setAttribute("data-bs-theme", "dark");
            localStorage.setItem("darkmode", "1");
            botaoDark.innerHTML = "Light Mode";
        }
    });
}

function navbarTogglerUnFocus(){ // Alterna o foco do navbar-toggler ao abrir/fechar o menu
    var navbarToggler = document.querySelector('.navbar-toggler');
    navbarToggler.addEventListener('click', function() { // clique no navbar-toggler
      var expanded = this.getAttribute('aria-expanded');
      if (expanded == 'false') { // Verifica se o menu está fechado
        navbarToggler.removeAttribute("id");
        this.blur(); // Remove o foco do elemento
      }
      else if(expanded == 'true'){
        navbarToggler.setAttribute("id", "navbar_focus");
      }
    });
}

// ********************************************** Início mostraForm()  ********************************************** 
function mostraForm() { // chamada diretamente no contactos.php
    const form = document.querySelector("#form_contactos");
    
    const textoInicial = criaTextoInicial();
    
    const textoConteudo = criaTextoConteudo();

    const countdownElement = criaCountdown(); // Mostra tempo restante.

    const resultados = criaResultados(); // Div "resultados" que junta os textos (textoInicial + textoConteudo)

    setTimeout(function() {
        textoInicial.removeAttribute('id');    // remove o id do textoInicial, escurecendo o mesmo
        resultados.appendChild(countdownElement); // Mostra countdown após escurecer o textoInicial
    }, 3000); // Tempo até executar em milissegundos (3000 = 3 segundos)

    setTimeout(function() {
        removeResultados(resultados);
    }, 30000);

    // ******** Funções ********
    function criaTextoInicial(){
        let textoInicial = document.createElement("span");
        textoInicial.id = "mensagem_recebida";
        textoInicial.innerHTML = "A tua mensagem foi recebida, obrigado.<br>Uma cópia será enviada para o teu email.<br><br>"
        return textoInicial;
    }

    function criaTextoConteudo(){
        let textoConteudo = document.createElement("div");
        Array.from(form.elements).forEach((element) => { // para cada elemento to form
            if (element.tagName !== "BUTTON") { // exclui botão 
                textoConteudo.innerHTML += element.name + ": " + element.value + "<br>";
            }
        });
        textoConteudo.innerHTML += "<br>";
        return textoConteudo;
    }

    function criaCountdown(){
        const countdownElement = document.createElement("span");
        countdownElement.id = "countdown";
        let remainingSeconds = 29; // Tempo em segundos
        const countdownInterval = setInterval(updateCountdown, 1000); // Atualiza a cada segundo (1000ms)
        function updateCountdown() {
            countdownElement.textContent = `Auto-destruição em ${remainingSeconds} segundos...`;
            countdownElement.innerHTML += "<br><br>";
            remainingSeconds--;
            if (remainingSeconds < 0) {
                clearInterval(countdownInterval); // Para a contagem regressiva quando atingir zero
                countdownElement.textContent = ""; // Remove o textoInicial do elemento
            }
        }
        const lineBreak = document.createElement("br");
        countdownElement.appendChild(lineBreak);

        return countdownElement;
    }

    function criaResultados(){
        const resultados = document.createElement("div");
        resultados.classList.add("resultados");
        resultados.appendChild(textoInicial);
        resultados.appendChild(textoConteudo);
        form.parentElement.prepend(resultados);

        return resultados;
    }

    function removeResultados(resultados){
        resultados.removeChild(textoInicial);
        resultados.removeChild(textoConteudo);
        resultados.removeChild(countdownElement);
    }

} // ********************************************** Fim mostraForm() **********************************************

/* alerta ao clicar no header

function alerta() {
    alert("Banner!");
}
document.querySelector("header").addEventListener("click", alerta);
*/