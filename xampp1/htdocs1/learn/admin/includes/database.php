<?php
//require_once("config.php");
class Database{
public $connection;


 function __construct(){
 	$this->open_db_connection();
 }
 public  function open_db_connection(){
 
   include("config.php");
 	//$this->connection=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
 	$this->connection=new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
if($this->connection->connect_errno){
	  die("Database connection failed ". $this->conection->connect_errno);
}


}
public function query($sql){
	$result=$this->connection->query($sql);
	$this->confirm_query($result);
	return $result;
}

private function confirm_query($result){
	if (!$result){
        die("Query failed". $this->connection->error);
	}


	
}
public function escape_string($string){
	   $escape_string=$this->connection->real_escape_string($string);
	   return $escape_string;
}

public function the_insert_id(){
	return mysqli_insert_id($this->connection);
}



}
 $database=new Database();
 	?>