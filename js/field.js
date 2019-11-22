$(document).ready(function(){	
	
	var x_IsMoving = true;
	var gameStarted = "Game started!";
	
	$.ajax({
		url: "/tic_tac_toe/lib/index.php",  
		cache: false,   
		method: "GET", 
		dataType: "html",   
		data:{gameStarted: gameStarted},
		success: function(data) {
			alert(gameStarted);								 
		}		 
	 });
	
	
	var func = function() {
		$(this).off("click");
		var txt = "-";
		var clickId = $(this).attr('id');
		var move = clickId + "x";
		
		if(x_IsMoving==true){
			move = clickId + "x";
			txt = "x";
			x_IsMoving=false;	
		}
		
		else if (x_IsMoving==false) {
			move = clickId + "o";
			txt = "o";
			x_IsMoving=true;	
			
		}
			
		$.ajax({
		url: "/tic_tac_toe/lib/index.php",  
		cache: false,   
		method: "GET", 
		dataType: "html",   
		data:{move: move},
		success: function(data) {
					txt = "-";
					var winner = data;
					
					if(winner == "X Wins!" || winner == "O Wins!" || winner == "Draw!" ){
						x_IsMoving = true;
						$(".butt").off("click");
						$(".butt").on("click", func); 
						$(".butt").text(txt);								
					}		
					alert(data);											 
				}		 
		});
		$(this).text(txt);		
	};
	
	$(".butt").on("click", func); 	
});




