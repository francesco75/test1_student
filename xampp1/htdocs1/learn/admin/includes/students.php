<?php

/**
 * 
 */
class Students extends Db_extension
{
protected static  $db_table="students";    
protected static $db_table_fields=array('first_name','last_name','password','age','photo','va','vg','vh','vgeo','vs','vart','vmus'); 
public $id;
public $first_name;
public $last_name;	
public $password;
public $count;
public $countIn;
public $age;
public $va;
public $vg;
public $vh;
public $vgeo;
public $vs;
public $vart;
public $vmus;
public $value;
public $q1;
public $q2;
public $q3;
public $q4;
public $q5;
public $q6;
public $q7;
public $q8;
public $q9;
public $q10;
public $db_user_password;
public $message="<h2 class='btn btn-success'>Correct. The solution is  ";
public $Incorrect="<h2 class='btn btn-danger'>Incorrect. The solution is wrong  ";
public $photo;
public $upload_directory= "images1";
public $image_placeholder="http://placehold.it/400x400&text=image";



public static function find_by_student($id) {
global $database;
$the_result_array= static::find_by_query("SELECT * FROM  " . static::$db_table . " WHERE id=$id  LIMIT 1 ");

return !empty($the_result_array) ? array_shift($the_result_array) :false;
 }



public function update($vote,$value){
global $database;
$this->id =$_SESSION['user_id'];
$sql="UPDATE " . static::$db_table . " SET $value= $vote " ;
$sql.= " WHERE id= " . $database->escape_string($this->id);
$database->query($sql);
return (mysqli_affected_rows($database->connection)== 1) ? true:false;

}// End Method update



public function delete(){
global $database;
$sql= "DELETE FROM  " .static::$db_table . " "; 
$sql.= " WHERE id= " . $database->escape_string($this->id);
$sql.= " LIMIT 1";


$database->query($sql);
return (mysqli_affected_rows($database->connection)== 1) ? true:false;


}//End Method Delete





public static function verify_user($lastname,$password){
global $database;

$lastname=$database->escape_string($lastname);
$password=$database->escape_string($password);



$sql= "SELECT * FROM  " . self::$db_table . " WHERE ";
$sql.= "last_name = '{$lastname}' ";
//$sql.= "AND password = '{$password}' "; 
$sql.= "LIMIT 1";
$the_result_array= self::find_by_query($sql);
foreach ($the_result_array as $key => $value) {
         
         $db_password=$value->password;
         
if (password_verify($password, $db_password)){
return !empty($the_result_array) ? array_shift($the_result_array) :false;

}
else{
    return false;
}
}
}

public static function find_by_query($sql){
global $database;
$result_set=$database->query($sql);
$the_object_array=array();
while ($row=mysqli_fetch_array($result_set)) {
	$the_object_array[]=static::instantation($row);
}



return $the_object_array;	 
}             	

public static function instantation($the_record){

	        $calling_class=get_called_class();

            $the_object=new $calling_class;
            foreach ($the_record as $the_attribute => $value) {
             	if ($the_object->has_the_attribute($the_attribute)){
                         $the_object->$the_attribute=$value;

             	}
             	
             }
        return $the_object;
                          
}



private function has_the_attribute($the_attribute){

$object_properties=get_object_vars($this);

return array_key_exists($the_attribute, $object_properties);	
}


private function properties(){
    //return get_object_vars($this);
    $properties=array();
    foreach (static::$db_table_fields as $db_fields) {
        if(property_exists($this, $db_fields)){
            $properties[$db_fields]=$this->$db_fields;
        }
    }
    return $properties;
}

protected function clean_properties(){
    global $database;
    $clean_properties=array();

     foreach ($this->properties() as $key => $value) {
         $clean_properties[$key]=$database->escape_string($value);
     }
    return $clean_properties;

}

public function add_student(){
global $database;

$properties= $this->clean_properties();

$sql= "INSERT INTO " .static::$db_table . "(" . implode(",",array_keys($properties)) . ")";
$sql.="VALUES ('". implode("','",array_values($properties)) ."')";
//$sql= " ALTER TABLE " .static::$db_table .  " AUTO_INCREMENT =1";


if($database->query($sql)){

      $this->id=$database->the_insert_id();
      return true;

}else{
      return false;
}

}// Create Method


public function update_student(){
global $database;

$properties= $this->clean_properties();
$properties_pairs=array();

foreach ($properties as $key => $value) {
    $properties_pairs[]="{$key}='{$value}'";
}


$sql="UPDATE " .static::$db_table . " SET ";
$sql.= implode(",", $properties_pairs);
$sql.= " WHERE id= " . $database->escape_string($this->id);

$database->query($sql);
return (mysqli_affected_rows($database->connection)== 1) ? true:false;




}// End Method update

// Check Register with only one Password
public function student_exist($lastname){
                   global $database;
                   $sql= "SELECT last_name FROM students WHERE last_name= '{$lastname}' ";
                   $result2=$database->query($sql);
                  if (mysqli_num_rows($result2)>0){
                    return true;
                  }
                  else{
                     return false;
                  } 

                }
  







public function save(){

    return isset($this->id) ? $this->update_student() : $this->add_student();
}

public function counter($test,$result){
      if($test == $result)  {
        echo $this->message.$result."</h2>"; 
        $this->count=$this->count+1;                                    
                                     }
       else {
          echo $this->Incorrect. $result."</h2>";
          $this->countIn=$this->countIn+1;
          
      
    }
    }//End Method Counter

}

?>