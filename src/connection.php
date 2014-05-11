<?php

/* Connecting Database using PDO */

//Do things inside a try catch block , so we can easly manage exception
try{

	$db=new PDO('mysql:host=localhost;dbname=test','root','');
	// if you want connect a Sqlite databse use '$db=new PDO('sqlite:data.db');'
	//Set the error mode to exception
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	/*
		PDO::ERRMODE_SILENT (Default)
		PDO::ERRMODE_WARNING
		PDO::ERRMODE_EXCEPTION
	*/

}
catch(PDOException $e){
	echo 'Database Connection Error<br/>';
	echo $e->getMessage();
}

/* Whua Thats it . Now variable $db is the database resource */