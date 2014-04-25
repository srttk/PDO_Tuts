<?php
include 'lib/input.php';
include 'lib/database.php';

//Start Add
if(Input::post('add') && Input::post('name'))
{
	$insert=$db->prepare('INSERT INTO peoples (name,email) VALUES(:name,:email)');
	$data_tmp=array('name'=>Input::post('name'),
					'email'=>Input::post('email')
			);
	$insert->execute($data_tmp);
	header('Location:index.php');
}
//End Add
//Start delete
if(Input::get('del')){
	$dst=$db->prepare('DELETE FROM peoples WHERE id=?');
	$dst->bindParam(1,$did);
	$did=Input::get('del');
	$dst->execute();
	header('Location:index.php');

}
//End Delete

//Start update
if(Input::get('stat')){
	$dst=$db->prepare('UPDATE  peoples set status=status+1 WHERE id=?');
	$dst->bindParam(1,$did);
	$did=Input::get('stat');
	$dst->execute();
	header('Location:index.php');

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>App using SQlite </title>
<style type="text/css">
	body{
		width: 500px;
		margin: auto;
	}
	.people-list{
		background-color: #ccc;
	}
	table{
		width: 100%;
		border:solid 1px #dedede;
		border-collapse: collapse;
		padding: 2px;
	}
	td{
		border: solid 1px #acacac;
	}
</style>
</head>
<body>
<form method="post">
	<label>Name</label><input type="text" name="name" />
	<label>Email</label><input type="text" name="email" />
	<input  name="add" type="submit" value="Add"/>

</form>
<div class="people-list">
	<?php
	$stmt=$db->prepare("SELECT * FROM peoples");
		//Start Search
		if(Input::get('q')){
			$q=Input::get('q');
			$stmt=$db->prepare("SELECT * FROM peoples WHERE name LIKE '$q%' ");
			//$stmt->bindParam(':q',$q);
			
		}
		//End Search
	$stmt->execute();

	$data=$stmt->fetchAll(PDO::FETCH_OBJ);
	?>
	<table>
		<tr><th>#</th>
			<th>Name</th><th>Email</th><th>Votes</th><th>Actions</th>
		</tr>
		<?php if($data && count($data)):
			//var_dump($data);die();
			$count=0;
			foreach($data as $person):
				$count++;
		?>
		<tr>
			<td><?=$count;?></td>
			<td><?= $person->name;?></td>
			<td><?= $person->email;?></td>
			<td><?= $person->status;?></td>
			<td><a href="?del=<?= $person->id;?>">Delete</a> <a href="?stat=<?= $person->id;?>">Vote</a></td>
		</tr>
	<?php endforeach;else: ?>
	<tr><td colspan="2">No records found.</td></tr>
	<?php endif;?>
	</table>
	<form method="get">
		<input type="text" name="q">
		<input type="submit" name="search" value="search">
	</form>


</div>
</body>
</html>