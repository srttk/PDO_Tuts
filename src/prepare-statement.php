<?php 
require_once 'connection.php';

# 1 Prepare bindValue()
/*$stmt=$db->prepare('SELECT * FROM users WHERE id BETWEEN ? AND ?');
	$stmt->bindValue(1,93);
	$stmt->bindValue(2,96);
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($data as $d) {
	echo $d->name.'<br/>';
}*/

# 2 bindParam with unnamed parameters
/*$stmt=$db->prepare('SELECT * FROM users WHERE id BETWEEN ? AND ?');
	
	$start=93;
	$end=96;
	$stmt->bindParam(1,$start);
	$stmt->bindParam(2,$end);
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_OBJ);
var_dump($data);
// $stmt->rowCount()
echo "<br/>Number of rows ".$stmt->rowCount();
*/



