<?php
	require_once 'connection.php';
	class Add{
		
		public static function add_into_database($a){
				 
			if(isset($a)){
					
					$connection = new Connection();
					$connection->host;
					$connection->database;
					$connection->user;
					$connection->password;
				 
					$link = mysqli_connect($connection->host, $connection->user, $connection->password, $connection->database) 
						or die("Ошибка " . mysqli_error($link)); 
														
					$a = htmlentities(mysqli_real_escape_string($link, $a));
																				
					$query ="INSERT INTO moves VALUES(NULL, '$a')";
					
							
					$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
					
					
					mysqli_close($link);
			}
			
		}
	}
?>
