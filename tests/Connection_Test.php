<?php 
class Connection_Test extends PHPUnit_Framework_TestCase{
	public $db=NULL;
	public function __construct(){
		parent::__construct();
		include('src/connection.php');
		$this->db=$db;
	}
	function testConnection(){
		$this->assertTrue(isset($this->db)==TRUE);
	}
	function testSame(){
		$this->assertSame('name','name');
	}
}