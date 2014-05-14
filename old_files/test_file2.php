<?php
error_reporting(0);
var_dump($_SERVER);
try{
	$db=new PDO('mysql:host=localhost;dbname=test','root','');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo "Could not connect database";
}
try{
	$data=$db->query('selefct * from users');
}
catch(PDOException $e){
	echo "Error in sql query";
}

var_dump($data->fetch(PDO::FETCH_ASSOC));