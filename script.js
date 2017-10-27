var lucky = [];
var gameover = false;
var skaiciai=[];

function roll(){
	
	if (!gameover) {
		
		for (var i = 1; i < 4; i++) {
			x = null;		
			x = Math.ceil(Math.random()*6);
			document.getElementById("dice"+[i]).src = "images/"+[x]+".jpg";
			skaiciai.push(x);
		}
	}	
}
check_gameover();
}

function check_gameover() {
	if (skaiciai.length < 4) {
	} else {
		//alert("Game is over");
		gameover = true;
	}
}
