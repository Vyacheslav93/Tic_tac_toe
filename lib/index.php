<?php

	require_once 'add.php';
	require_once 'steps.php';
	
	session_start();

	if(isset($_GET['gameStarted'])){
		
		Add::add_into_database($_GET['gameStarted']);
		session_destroy();
		session_start();
					
	}
	
	if(isset($_GET['move'])){
		
		Add::add_into_database($_GET['move']);
		$_SESSION['moves'][]=$_GET['move'];
		$winner = Steps::step($_SESSION['moves']);	
		echo $winner;		
				
	}
	

	
?>