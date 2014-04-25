<?php
include 'helper.php';
/*
Created : April 4  2014 
*/
	
/* PART 0 :Connecting*/
	//Display Available PDO Drivers
	print_r(PDO::getAvailableDrivers()); 
	//Connection
	try{
		$db=new PDO('sqlite:data.db');
		//$db=new PDO('mysql:host=localhost;dbname=test','root','');

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
	//$q=$db->query("SELECT * from peoples");
	//var_dump($q);
		//Fetching data
		
		// Setting fetch type
		
		/* Fetch types: PDO::FETCH_ASSOC,PDO::FETCH_OBJ,PDO::FETCH_ARRY */
		
		/*while($data=$q->fetch(PDO::FETCH_ASSOC)){
		clog($data);
		}*/

		//Fetching All data
		//$q=$db->query("SELECT * from peoples");
		//Count rows
		//clog($q->rowCount());
		/* You can also set fetch mode */
		//$all_data=$q->fetchAll(PDO::FETCH_ASSOC);
		/* To fetch a single row  use $q->fetch() or $q->fetch(FETCH_MODE)*/
		//clog($all_data);


		//Selecting using prepare statement
		$stm=$db->prepare("SELECT * FROM peoples");
		//$stm->bindParam(1,$idx);
		//$idx=16;
		$stm->execute();
		clog($stm->fetchAll());
		clog($stm->rowCount());




		
// Part 2 : Insertion
		
		// Var $stmt is a PDOStatement Object
		
		/*Unnamed placeholder*/
		/*$stmt=$db->prepare('INSERT INTO peoples (name,email) VALUES(?,?)');
		$stmt->bindParam(1,$name);
		$stmt->bindParam(2,$email);
		$name="Sarath";
		$email="sarath@unnamed.com";
		$stmt->execute();*/

		/* Named palceholder
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':email',$email);
		$name="Sarath";
		$email="sarath@ddsds.com";
		$stmt->execute();
		*/

		/*Shortcut method*/
		//$stmt=$db->prepare('INSERT INTO peoples (name,email) VALUES(:name,:email)');
		//$stmt->execute(array('name'=>'sarath','email'=>'sarath@djfj.com'));

// Part 3: Updattion
		
		/*$stmt=$db->prepare('UPDATE peoples SET name=?,email=? WHERE id=?');
		$stmt->bindParam(1,$name);
		$stmt->bindParam(2,$email);
		$stmt->bindParam(3,$id);
		$name="Updated name";$email="Updated email";$id=14;
		$stmt->execute();
		*/
// Part 4: Delete
		$stmt=$db->prepare('DELETE FROM peoples  WHERE id=?');
		$stmt->bindParam(1,$id);
		$ww=$stmt->execute();
		if(!$ww){
			echo "FFFf";
		}



	
?>
