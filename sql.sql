CREATE DATABASE tic_tac_toe;
USE tic_tac_toe;
CREATE TABLE moves 
( 
id int NOT NULL AUTO_INCREMENT, 
move varchar(200) NOT NULL,  
PRIMARY KEY (id) 
);