/* 
Peguei numa template que serviu de base e implementei as minhas regras e outras definições ao meu gosto.
Implementei um sistema de progressão/despromoção entre 3 dificuldades: fácil, médio e difícil com 3, 6 e 9 quadrados respetivamente
 	Nível Fácil: 0-9 pontos.
	Nível Médio: 10-20 pontos.
	Nível Difícil: +20 pontos.
O sistema de levelUp/levelDown é acionado consoante a pontuação do jogador.
Ganha-se 5 pontos ao acertar e perde-se 2 pontos ao errar, até o minímo de 0 pontos.
Pode-se alternar entre dificuldades consoante desejar, no entanto, isso é considerado como um reset e portanto a pontuação é resetada aos valores previstos, consoante a dificuldade escolhida.
*/

const maxNumQuadrados = 9
var numQuadrados = maxNumQuadrados;
var cores = [];
var corEscolhida;
var quadrados = document.querySelectorAll(".quadrado");
var colorDisplay = document.getElementById("colorDisplay");
var pontuacaoDisplay = document.getElementById("pontuacaoDisplay");
var mensagemDisplay = document.querySelector("#message");
var h1 = document.querySelector("h1");
var resetButton = document.querySelector("#reset"); /* Botão reset: "Cores Novas/Novo Jogo" */
var modeButtons = document.querySelectorAll(".mode"); /* Botões de Dificuldade */
var modeButtonSelected = document.getElementById("selected"); /* Botão de Dificuldade Selecionado */
var dificuldade = modeButtonSelected.textContent; /* Dificuldade Selecionada - Default: Médio */

var acertou = false;
var pontuacao = 0;

init();

function init() {
	setQuadradosEPontuacaoInicial();
	preparaModeButtons();
	preparaQuadrados();
	reset();
}


function preparaModeButtons(){
	for (var i = 0; i < modeButtons.length; i++) {
		modeButtons[i].addEventListener("click", function (){ /* Mudar de Nivel ao Clicar */
            modeButtons[0].setAttribute("id", "notSelected");
            modeButtons[1].setAttribute("id", "notSelected");
            modeButtons[2].setAttribute("id", "notSelected");
            this.setAttribute("id", "selected");
			this.textContent === "Fácil" ? numQuadrados = 3: this.textContent === "Médio" ? numQuadrados = 6: numQuadrados = maxNumQuadrados;
			setPontuacaoInicial(); /* Colocar a pontuação inicial ao mudar de nivel manualmente */
			reset();
		});
	}
}

function preparaQuadrados(){
	for (var i = 0; i < quadrados.length; i++) {
		quadrados[i].addEventListener("click", function() { //adiciona click listeners aos quadrados		
			var corClicada = this.style.backgroundColor; //deteta cor do quadrado clicado
			var corErrada = "rgb(35, 35, 35)";
			if (corClicada === corEscolhida) { //compara cor clicada á corEscolhida
				mensagemDisplay.textContent = "Acertaste!";
				resetButton.textContent = "Novo Jogo?";
				mudaCor(corClicada);
				h1.style.backgroundColor = corClicada;
				if(acertou == false) /* Previne que ganhe pontos infinitos por rodada */
					pontuacao += 5;
				acertou = true;
				atualizaPlacarPontuacao();
			}
			else if(corClicada === corErrada){ // se o quadrado já for da cor errada
				mensagemDisplay.textContent = "Tenta outro quadrado.";
			}
			else {
				this.style.backgroundColor = corErrada; // muda a cor do quadrado para a cor errada
				mensagemDisplay.textContent = "Cor Errada.";
				if(pontuacao > 0)
					pontuacao -= 2;
				atualizaPlacarPontuacao();
			}
		},);
	}
}
function reset (){
	if(acertou===true){
		verificarLevelChange();
		acertou = false;
	}
	cores = geraCoresRandom(numQuadrados);
	//pega nova cor random do array
	corEscolhida = pegaCor();
	//muda o colorDisplay para igualar a cor escolhida
	colorDisplay.textContent = corEscolhida;
	resetButton.textContent = "Cores Novas";
	mensagemDisplay.textContent = "";
	//muda cores dos quadrados
	for (var i = 0; i < quadrados.length; i++) {
		if(cores[i]){
			quadrados[i].style.display = "block";
			quadrados[i].style.backgroundColor = cores[i];
		} else {
			quadrados[i].style.display = "none";
	}
	h1.style.backgroundColor = "var(--cineColor)";
	
}}

resetButton.addEventListener("click", function(){
	reset();
})

function mudaCor (color) {
	//loop por todos os quadrados
	for (var i = 0; i < quadrados.length; i++) {
		//muda cada cor para igualar a cor escolhida
		quadrados[i].style.backgroundColor = color;
	}
}

function pegaCor () {
	var random = Math.floor(Math.random() * cores.length);
	return cores[random];
}

function geraCoresRandom (num) {
	//faz um array
	var arr = [];
	//repete "num" vezes
	for (var i = 0; i < num; i++) {
		//recebe cores random e coloca no array
		arr.push(corRandom());
	}
	//return do array
	return arr;
}

function corRandom(){
	//pega um "red" de 0 - 255
	var r = Math.floor(Math.random() * 256);
	//pega um "green" de 0 - 255
	var g = Math.floor(Math.random() * 256);
	//pega um "blue" de 0 - 255
	var b = Math.floor(Math.random() * 256);
	return "rgb(" + r + ", " + g +", " + b + ")";
}

function setQuadradosEPontuacaoInicial(){ /* Usado apenas no inicio para verificar qual a dificuldade default e consoante a mesma, setar a pontuação */
	verificarDificuldadeAtual();
	dificuldade === "Fácil" ? (numQuadrados = 3, pontuacao = 0): 
	dificuldade === "Médio" ? (numQuadrados = 6, pontuacao = 10): 
	(numQuadrados = maxNumQuadrados, pontuacao = 20);
	atualizaPlacarPontuacao();
}

function setPontuacaoInicial(){
	verificarDificuldadeAtual();
	dificuldade === "Fácil" ? pontuacao = 0: 
	dificuldade === "Médio" ? pontuacao = 10: 
	pontuacao = 20;
	atualizaPlacarPontuacao();
}

function levelDownToFacil(){
	numQuadrados = 3;
	modeButtons[1].setAttribute("id", "notSelected");
	modeButtons[0].setAttribute("id", "selected");
}

function levelUpToMedio(){
	numQuadrados = 6;
	modeButtons[0].setAttribute("id", "notSelected");
	modeButtons[1].setAttribute("id", "selected");
}

function levelDownToMedio(){
	numQuadrados = 6;
	modeButtons[2].setAttribute("id", "notSelected");
	modeButtons[1].setAttribute("id", "selected");
}

function levelUpToDificil(){
	numQuadrados = maxNumQuadrados;
	modeButtons[1].setAttribute("id", "notSelected");
	modeButtons[2].setAttribute("id", "selected");
}


function verificarDificuldadeAtual(){
	modeButtonSelected = document.getElementById("selected");
	dificuldade = modeButtonSelected.textContent;
}

function verificarLevelChange(){
	verificarDificuldadeAtual();
	if(dificuldade === "Fácil" && pontuacao >= 10)
		levelUpToMedio();
	else if(dificuldade === "Médio" && pontuacao < 10)
		levelDownToFacil();
	else if(dificuldade === "Médio" && pontuacao > 20)
		levelUpToDificil();
	else if(dificuldade === "Difícil" && pontuacao >= 10 && pontuacao <= 20)
		levelDownToMedio();
	else if(dificuldade === "Difícil" && pontuacao < 10)
		levelDownToFacil();
}

function atualizaPlacarPontuacao(){
	pontuacaoDisplay.textContent = pontuacao;
}