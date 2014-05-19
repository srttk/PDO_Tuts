<?php
include 'connection.php';

# 1 : Querrying DB And Fetch a single row

/*$q=$db->query('SELECT * FROM users');
var_dump($q->fetch());*/

# 2 : Querying DB With all rows
/*$q=$db->query('SELECT * FROM users');
var_dump($q->fetchALL());*/

# 3 : Setting fetch mode

/*$q=$db->query('SELECT * FROM users');
$q->setFetchMode(PDO::FETCH_OBJ);// Fetch types: PDO::FETCH_ASSOC,PDO::FETCH_OBJ,PDO::FETCH_ARRY
var_dump($q->fetchAll());*/

# 4 :Setting fetch mdoe (Shortcut)
/*$q=$db->query('SELECT * FROM users');
var_dump($q->fetchAll(PDO::FETCH_OBJ));*/

# 5 : Using prepare statement
/*$stmt=$db->prepare("SELECT * FROM users");
$stmt->execute();
var_dump($stmt->fetch());*/

# 6 : Selecting with  Where condition using parameters
/*$stmt=$db->prepare("SELECT * FROM users WHERE id=?");
//$stmt->bindValue(1,93);//Directly Bind Value or
$stmt->bindParam(1,$id);
$id=93;
$stmt->execute();
var_dump($stmt->fetch());*/

