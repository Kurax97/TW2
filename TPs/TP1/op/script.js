window.onload = function(){ 

	document.getElementsByClassName("blanc").onclick = function(){
		document.getElementsByClassName("blanc").classList.add('noir');
		document.getElementsByClassName("blanc").classList.remove('blanc');

	};

	document.getElementsByClassName("noir").onclick = function(){
		document.getElementsByClassName("noir").classList.remove('blanc');
	};

	document.getElementsByTagName("td").onclick = function(){
		document.getElementsByClassName("noir").classList.add('blanc');
		document.getElementsByClassName("noir").classList.remove('noir');
	};

};
