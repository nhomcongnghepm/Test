<?php
	class database{
		//khai bao thuoc tinh
	private $conn=null;
	private $host='localhost';
	private $username= 'root';
	private $password= '';
	private $database='login';
	private $result=null;
	
	//khai bao cac hanh vi
	
	private function connect(){
		$this->conn=new MySQLi(
		$this->host,$this->username,$this->password,$this->database)
		or die('can not connect');
		$this->conn->query("SET NAMES UTF8");
	}
	
	public function select ($sql){
		$this->connect();
		$this->result=$this->conn->query($sql);
		return $this->result;
	}
	public function command($sql){
		$this->connect();
		$this->conn->query($sql);
		
	}
	public function fetch(){
		if($this->result->num_rows > 0){
			$row=$this->result->fetch_assoc();
		}
		else{
			$rows=0;
		}
		return $rows;
	}
}
?>
