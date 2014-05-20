<?php
include 'connection.php';

# Database Insertion 

# Unnamed Prarameters
/*
$stmt=$db->prepare('insert into users (email,name) values(?,?)');
$email="email_".time()."@email.com";
$name="Someone".time();
$stmt->bindParam(1,$email);
$stmt->bindParam(2,$name);
$stmt->execute();
if($stmt->rowCount()==1){
	echo "New Row added";
}
*/

# Nmaed Parameters

/*$stmt=$db->prepare('insert into users (email,name) values(:email,:name)');

$email="email_".time()."@email.com";
$name="Someone".time();
$stmt->bindParam(':email',$email);
$stmt->bindParam(':name',$name);
$stmt->execute();
if($stmt->rowCount()==1){
	echo "New Row added";
}*/

# Shortcut 
/*try{
	$stmt=$db->prepare('insert into users (email,name) values(:email,:name)');

	$email="email_".time()."@email.com";
	$name="Someone".time();
	$newuser=array('email'=>'sarath.hacks@gmail.com','name'=>'Sarath');
	$stmt->execute($newuser);
	if($stmt->rowCount()==1){
		echo "New Row added";
	}
}
catch(PDOException $e){
	echo $e->getMessage();
	echo $e->getCode();
}
*/
