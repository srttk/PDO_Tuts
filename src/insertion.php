<?php
include 'connection.php';

#Unnamed Prarameters
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

#Nmaed Parameters

$stmt=$db->prepare('insert into users (email,name) values(:email,:name)');

$email="email_".time()."@email.com";
$name="Someone".time();
$stmt->bindParam(':email',$email);
$stmt->bindParam(':name',$name);
$stmt->execute();
if($stmt->rowCount()==1){
	echo "New Row added";
}