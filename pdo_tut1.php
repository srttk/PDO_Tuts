<?php
include 'clog.php';
/*
Created : April 4  2014 
*/
	
/* PART 0 :Connecting*/
	try{
		$db=new PDO('mysql:host=localhost;dbname=b2b','root','');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
		die("Database error");
	}

// Part 1 :Simple SQL query :Select
	$q=$db->query("SELECT * from feedback_tbl");
	//var_dump($q);
		//Fetching data
		// Setting fetch type
			/* Fetch types: PDO::FETCH_ASSOC,PDO::FETCH_OBJ,PDO::FETCH_ARRY */
		while($data=$q->fetch(PDO::FETCH_ASSOC)){
		clog($data);
		}

		//Fetching All data
		$q=$db->query("SELECT * from feedback_tbl");
		$all_data=$q->fetchAll(PDO::FETCH_ASSOC);
		clog($all_data);

		//Count rows
		clog($q->countRows());
		

	
?>