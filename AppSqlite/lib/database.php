<?php
$driver='mysql';
$host='localhost';
$database='test';
$username='root';
$password='';
try{
	switch ($driver) {
		case 'mysql':
			$db=new PDO("$driver:host=$host;dbname=$database;",$username,$password);
			break;
		case 'sqlite':
			$db=new PDO("$driver:$database");
			break;
		default:
			$db=new PDO("$driver:host=$host;dbname=$database;",$username,$password);
			break;
	}
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}
