<?php
include 'connection.php';

$stmt=$db->prepare('insert into users (email,name) values(?,?)');
$email="email_".time()."@email.com";
$name="Someone".time();
$stmt->bindParam(1,$email);
$stmt->bindParam(2,$name);
$stmt->execute();
if($stmt->rowCount()==1){
	echo "New Row added";
}
