var skaiciai = [];
var gameover = false;
var lucky = [];
var win = 0;
won = [];
prize = [];
skaiciai= [];

//metami kauliukai
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
			//document.getElementById("lentele").innerHTML += "Win "+ skaiciai[0]*0.1.toFixed(2);
		}  else if (skaiciai[1] == skaiciai[2]){		
			won.push(skaiciai[1]*0.1);	
			//document.getElementById("lentele").innerHTML +="Win "+ skaiciai[1]*0.1.toFixed(2);
		} 	
		total=0;
		for(var i in won) { total += won[i]; }
			document.getElementById("wonn").innerHTML ="Win "+ total.toFixed(2);
		console.log(total);

		} 
		check_gameover();
	}


	function check_gameover() {
		if (lucky.length < 4) {

		} else {
			document.getElementById("rd").disabled = true; 
			document.getElementById("wonn").innerHTML = "Your TOTAL prize is : " + total.toFixed(2);  		
			if (total > 0) {
				document.getElementById("prize").src = "images/win.jpg";
			} else {
				document.getElementById("prize").src = "images/lose.jpg";
			}
			gameover = true;
			kelk();

		}
	}

	function new_game() {
		if (gameover) {
			document.getElementById("prize").src = "";
			document.getElementById("dice1").src = "";
			document.getElementById("dice2").src = "";
			document.getElementById("dice3").src = "";
			document.getElementById("wonn").innerHTML = "";
			lucky = [];
			gameover = false;
			 document.getElementById("rd").disabled = false;   
			won = [];
			prize = [];
			skaiciai= [];
		}
	}

	function kelk(){
		$.post("game.php",
		{
			result: total,

		}, function (data){
			console.log(data);
		}
		);
	};