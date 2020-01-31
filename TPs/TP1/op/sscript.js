window.onload = function(){ 
var blanc = document.getElementsByClassName("blanc");
var noir = document.getElementsByClassName("noir");

blanc.addEventListener("click", toBlack());
noir.addEventListener("click", toGray());
document.getElementsByTagName("td").addEventListener("click", toWhite());

function toBlack() {
	blanc.classList.add('noir');
	blanc.classList.remove('blanc');
};
function toWhite() {
	var noir = document.getElementsByClassName("noir");
	noir.classList.add('blanc');
	noir.classList.remove('noir');
};
function toGray() {
	var noir = document.getElementsByClassName("noir");
	noir.classList.remove('blanc');
};
};