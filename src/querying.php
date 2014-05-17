<?php

include 'connection.php';

#Simple select query 
$sq=$db->query('SELECT * FROM users'); //query() return PDOStatement Object
//The query() return a PDO_Statement Object;
var_dump($sq->fetchAll(PDO::FETCH_ASSOC));

//You can also spacify the fetch mode using $sq->setFetchMode(PDO::FETCH_ASSOC)