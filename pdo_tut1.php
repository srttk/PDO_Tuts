<?php
include 'helper.php';
/*
Created : April 4  2014 
*/
	
/* PART 0 :Connecting*/
	try{
		$db=new PDO('mysql:host=localhost;dbname=b2b','root','');

		/* by default, the default error mode for PDO is PDO::ERRMODE_SILENT
			echo $db->errorCode();
			echo $db->errorInfo();
			PDO::ERRMODE_SILENT
			PDO::ERRMODE_WARNING
			PDO::ERRMODE_EXCEPTION
		*/
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
		die("Database error");
	}

// Part 1 :Simple SQL query :Select

	/*There's two core ways to accomplish this task: query and execute*/
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
		//Count rows
		clog($q->rowCount());
		/* You can also set fetch mode */
		$all_data=$q->fetchAll(PDO::FETCH_ASSOC);
		/* To fetch a single row  use $q->fetch() or $q->fetch(FETCH_MODE)*/
		clog($all_data);


		

	
?>
