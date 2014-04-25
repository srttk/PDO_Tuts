<?php

class pdb{
	public $db=null;
	public $affected_rows=NULL;
	public $_error_number=NULL;
	public $_error_message=NULL;
	public $errors=array(
			'42S02'=>'No such table',
			'42S22'=>'No such column',
			'23000'=>'Duplicate entry'
			);
	public $_sql=NULL;
	public function connect()
	{
		try{
			$this->db=new PDO('mysql:host=localhost;dbname=test','root','');
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function query($sql=NULL){
		$this->_sql=$sql;
		return $this->db->query($this->_sql);
	}
	public function insert($table,$data){
		$sql="INSERT INTO $table (".implode(',',array_keys($data)).") VALUES ( :".implode(',:',array_keys($data)).")";
		try{
			$stmt=$this->db->prepare($sql);
			$this->affected_rows=$stmt->rowCount();
			return $stmt->execute($data);
		}
		catch(PDOException $e){
			$this->_error_message=$e->getMessage();
			$this->_error_number=$e->getCode();
			return FALSE;
		}
		
	}
	public function update($table,$data,$condition){

	}
	public function error(){
		return $this->_error_number;
	}
	public function error_message(){
		return $this->_error_message;
	}
}
$db=new pdb();
$db->connect();

$db->insert('users',array('name'=>'sarath','email'=>'saratofgfgnitedd'.time()));
echo $db->error();
echo $db->error_message();
$n=$db->query('SELECT * FROM users');
print_r($n->fetchAll());


?>