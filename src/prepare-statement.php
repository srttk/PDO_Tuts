<?php 
require_once 'connection.php';

# Prepare bindValue()
$stmt=$db->prepare('SELECT * FROM users WHERE id BETWEEN ? AND ?');
	$stmt->bindValue(1,93);
	$stmt->bindValue(2,96);
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($data as $d) {
	echo $d->name.'<br/>';
}

