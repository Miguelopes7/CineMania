<?php
include "header.php";
?>

<section class="quiz">
	<h1>QUIZ</h1>
	<main>
		<div class="content">
			<div class="question-wrapper">
				<span class="question"></span>
				<span class="spnQtd"></span>
			</div>
			<span class="answers"></span>
		</div>
		<div class="finish">
			<span></span>
			<button>Reiniciar</button>
		</div>
	</main>
</section>

<script type="module">

/* QUIZ JS */
const question = document.querySelector(".question");
const answers = document.querySelector(".answers");
const spnQtd = document.querySelector(".spnQtd");
const textFinish = document.querySelector(".finish span");
const content = document.querySelector(".content");
const contentFinish = document.querySelector(".finish");
const btnRestart = document.querySelector(".finish button");

import questions from "./questions.js";

let currentIndex = 0;
let questionsCorrect = 0;
let questionAnswered = false;

embaralhaJogo();
loadQuestion();

btnRestart.onclick = () => { /* ao clicar botão restart */
    content.style.display = "flex";
    contentFinish.style.display = "none";
  
    currentIndex = 0;
    questionsCorrect = 0;
	embaralhaJogo();
	loadQuestion();
};

function loadQuestion() { /* Função para carregar pergunta */
	questionAnswered = false;
    spnQtd.innerHTML = `${currentIndex + 1}/${questions.length}`;
    const item = questions[currentIndex];
    answers.innerHTML = "";
    question.innerHTML = item.question;

    item.answers.forEach((answer) => {
        const div = document.createElement("div");

        div.innerHTML = `
        <button class="answer" data-correct="${answer.correct}">
        ${answer.option}
        </button>
        `;

        answers.appendChild(div);
    });

    document.querySelectorAll(".answer").forEach((item) => {
        item.addEventListener("click", nextQuestion);
    });
}

function nextQuestion(e) { /* Função próxima pergunta */

	if(questionAnswered === false) // Previne resposta várias vezes à mesma questão.
	{
		if (e.target.getAttribute("data-correct") === "true") {
			questionsCorrect++;
			e.target.style.backgroundColor = "green"; // resposta correta = div verde
		}
		else{
			e.target.style.backgroundColor = "red"; // resposta incorreta = div vermelha
		}

		e.target.setAttribute("id", "answer_complete");
		questionAnswered = true;

		setTimeout(function() { // timeout para próxima questão
			if (currentIndex < questions.length - 1) {
				currentIndex++;
				loadQuestion();
			} else
				finish();

		}, 1500);
	}
}

function finish() { /* Função final de jogo */
	if(questionsCorrect == questions.length){
		textFinish.innerHTML = `Parabéns campeão/ã, acertaste todas!<br>Resultado: ${questionsCorrect}/${questions.length}`;
	}
	else if(questionsCorrect >= questions.length-2 && questionsCorrect != questions.length){
		textFinish.innerHTML = `Uma pessoa de muita cultura, sim senhora!<br>Resultado: ${questionsCorrect}/${questions.length}`;
	}
	else if(questionsCorrect >= 5 && questionsCorrect < questions.length-2){
		textFinish.innerHTML = `Eh lá! Estamos impressionados, continua assim!<br>Resultado: ${questionsCorrect}/${questions.length}`;
	}
	else if(questionsCorrect > 1 && questionsCorrect < 5){
		textFinish.innerHTML = `Acertaste algumas... Já não é mau!<br>Resultado: ${questionsCorrect}/${questions.length}`;
	}
	else if(questionsCorrect == 1){
		textFinish.innerHTML = `Acertaste apenas uma pergunta.. Melhor que nada eheheh<br>Resultado: ${questionsCorrect}/${questions.length}`;
	}
	else{
		textFinish.innerHTML = `Desta vez nem uma foi lá...<br>Resultado: ${questionsCorrect}/${questions.length}`;
	}
    content.style.display = "none";
    contentFinish.style.display = "flex";
}

function shuffleArray(array) { /* Função embaralhar array */
	for (let i = array.length - 1; i > 0; i--) {
		const j = Math.floor(Math.random() * (i + 1));
		[array[i], array[j]] = [array[j], array[i]];
  	}
  	return array;
}

function embaralhaJogo(){ /* Função para embaralhar perguntas e respostas */
	shuffleArray(questions);
	questions.forEach((question) => {
  		shuffleArray(question.answers);
	});
}

</script>

<?php
	include "footer.php";
?>