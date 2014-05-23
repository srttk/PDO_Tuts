<?php
require_once 'connection.php';

#Database Updatation 
# 1 : Bind Value
$stmt=$db->prepare('UPDATE users set name=? WHERE id=?');

	$stmt->bindValue(1,'SaratH');
	$stmt->bindValue(2,93);
$stmt->execute();
