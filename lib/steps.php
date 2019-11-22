<?php

	class Steps{
		
			
		public static function step($a){
			
					
			$winner = "Keep playing!";
			
			$x_wins = "X Wins!";
			
			$o_wins = "O Wins!";
			
			$draw = "Draw!";
			
			$b = count($a);
			
			if(in_array("btn1x", $a) && in_array("btn2x", $a) && in_array("btn3x", $a)){
				
				$winner = $x_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn4x", $a) && in_array("btn5x", $a) && in_array("btn6x", $a)){
				
				$winner = $x_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn7x", $a) && in_array("btn8x", $a) && in_array("btn9x", $a)){
				
				$winner = $x_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn1x", $a) && in_array("btn4x", $a) && in_array("btn7x", $a)){
				
				$winner = $x_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn2x", $a) && in_array("btn5x", $a) && in_array("btn8x", $a)){
				
				$winner = $x_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn3x", $a) && in_array("btn6x", $a) && in_array("btn9x", $a)){
				
				$winner = $x_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn1x", $a) && in_array("btn5x", $a) && in_array("btn9x", $a)){
				
				$winner = $x_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn3x", $a) && in_array("btn5x", $a) && in_array("btn7x", $a)){
				
				$winner = $x_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif(in_array("btn1o", $a) && in_array("btn2o", $a) && in_array("btn3o", $a)){
				
				$winner = $o_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn4o", $a) && in_array("btn5o", $a) && in_array("btn6o", $a)){
				
				$winner = $o_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn7o", $a) && in_array("btn8o", $a) && in_array("btn9o", $a)){
				
				$winner = $o_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn1o", $a) && in_array("btn4o", $a) && in_array("btn7o", $a)){
				
				$winner = $o_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn2o", $a) && in_array("btn5o", $a) && in_array("btn8o", $a)){
				
				$winner = $o_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn3o", $a) && in_array("btn6o", $a) && in_array("btn9o", $a)){
				
				$winner = $o_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn1o", $a) && in_array("btn5o", $a) && in_array("btn9o", $a)){
				
				$winner = $o_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			} elseif (in_array("btn3o", $a) && in_array("btn5o", $a) && in_array("btn7o", $a)){
				
				$winner = $o_wins;
				Add::add_into_database($winner);
				session_destroy();
				
			}  elseif($b == 9 ){
				
				$winner = $draw; 
				Add::add_into_database($winner);
				session_destroy();
				
			} 
		
			else {
				
				$winner = "Keep playing!";
				//print_r($_SESSION['moves']);
				
			}
		
			return $winner;
			
		}
		
	
		
	}
?>
