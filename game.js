var skaiciai = [];
var gameover = false;
var lucky = [];
var win = 0;
won = [];
prize = [];
skaiciai= [];
function roll(){
	skaiciai = [];
	if (!gameover) {	
		for (var i = 1; i < 4; i++) {			
			x = Math.ceil(Math.random()*6);
			document.getElementById("lentele").innerHTML = "";		
			document.getElementById("dice"+[i]).src = "images/" + x + ".jpg";
			skaiciai.push(x);
		}
		
		lucky.push(skaiciai);
		//console.log(skaiciai[]);
		if(skaiciai[0] == skaiciai[1] || skaiciai[0] == skaiciai[2]){
			won.push(skaiciai[0]*0.1);
			document.getElementById("lentele").innerHTML += "Win "+ skaiciai[0]*0.1.toFixed(2);
		}  else if (skaiciai[1] == skaiciai[2]){		
			won.push(skaiciai[1]*0.1);	
			document.getElementById("lentele").innerHTML +="Win "+ skaiciai[1]*0.1.toFixed(2);
		} 	
			 total=0;
			for(var i in won) { total += won[i]; }
				document.getElementById("wonn").innerHTML ="Total win "+ total;
			console.log(total);
			//document.getElementById("won").innerHTML = "total win "+ total[0];
	} 
	check_gameover();
}


function check_gameover() {
	if (lucky.length < 4) {

	} else {
		gameover = true;
		//document.getElementById("won").innerHTML ="Total win "+ won[0]+ won[1]+ won[2]+ won[3];
		
	}
}

function new_game() {
	if (gameover) {
		document.getElementById("dice1").src = "";
		document.getElementById("dice2").src = "";
		document.getElementById("dice3").src = "";
		lucky = [];
		gameover = false;
		won = [];
		prize = [];
		skaiciai= [];
	} else {
		alert("game is not over yet!");
	}
}

