<?php

include 'connection.php';

//Simple select query 
$sq=$db->query('SELECT * FROM users');
//The query() return a PDO_Statement Object;
var_dump($sq->fetchAll());