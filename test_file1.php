<?php
class Input{
	public static function post($param=NULL){
		if(is_null($param)){
			return $_POST;
		}
		if(isset($_POST[$param])){
			return $_POST[$param];
		}
		return FALSE;
	}
	public static function get($param=NULL){
		if(is_null($param)){
			return $_GET;
		}
		if(isset($_GET[$param])){
			return $_GET[$param];
		}
		return FALSE;
	}
}
//error_reporting(1);
try{
	$db=new PDO('mysql:host=localhost;dbname=test;','root','');
	//$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
}
catch(PDOException $e){
	echo $e->getMessage();
}
if(Input::post('name') && Input::post('email')){
	$st=$db->prepare("INSERT INTO test (name,email) values(:name,:email)");
	$name=Input::post('name');$email=Input::post('email');
	$st->bindParam(':name',$name);
	$st->bindParam(':email',$email);
	$st->execute();

}





?>
<form method="post">
<textarea name="name"></textarea>
<input type="text" name="email" />
<input type="submit" name="submit">

</form>
<?php
$stmt=$db->query("SELECT * FROM test ORDER BY id DESC");

?>
<table>
	<?php
	if($stmt->rowCount()>0):
	while ($row=$stmt->fetch(PDO::FETCH_OBJ)):
	?>
	<tr>
		<td><?= $row->name;?></td><td><?= $row->name;?></td>
	</tr>
	<?php endwhile;
	else:
	?>
	<tr><td colspan="2">No Data</td></tr>
	<?php endif;?>
</table>
