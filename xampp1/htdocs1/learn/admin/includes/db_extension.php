<?php

class Db_extension
{
	

public $errors=  array();
public $upload_errors_array= array(
    UPLOAD_ERR_OK         =>  "There is no error ", 
    UPLOAD_ERR_INI_SIZE   =>  "The file upload file exceeds the upload max filesize  " ,
    UPLOAD_ERR_FORM_SIZE  =>  "The file upload file exceeds the max filesize directory " ,
    UPLOAD_ERR_PARTIAL    =>  "The file upload was only partially upload " ,
    UPLOAD_ERR_NO_FILE    =>  "No file was upload" ,
    UPLOAD_ERR_NO_TMP_DIR =>  "Missing a temporary folder" ,
    UPLOAD_ERR_CANT_WRITE =>  "Failed to write file to disk " ,
    UPLOAD_ERR_EXTENSION  =>  "A php extension stopped the file upload."
);


protected static $db_test="test";





public static function find_by_test($id) {
global $database;
$the_result_array= static::find_by_query("SELECT * FROM  " . static::$db_test . " WHERE id=$id  LIMIT 1 ");

return !empty($the_result_array) ? array_shift($the_result_array) :false;
 }






public function set_file($file){
    if (empty($file) || !$file  || !is_array($file)){
        $this->errors[]= " There was no file upload here ";
        return false;
    }
    elseif($file['error'] !=0){
        $this->errors[]= $this->upload_errors_array[$file['error']];
    }
else{
        $this->photo = basename($file['name']);
        $this->tmp_path = $file['tmp_name'];
        $this->type     = $file['type'];
        $this->size     = $file['size'];

}


}// End Method set_file


public function upload_photo(){

    
         if(!empty($this->errors)){
            return false;
         }
         if(empty($this->photo) || empty($this->tmp_path)){
            $this->errors[]= "the file was not avaiable ";
            return false;
         } 
         $destination_path = getcwd().DIRECTORY_SEPARATOR;
         $target_path= $destination_path . DS .  $this->upload_directory . DS . $this->photo;
         if(file_exists($target_path)){
            $this->errors[]= " The file {$this->photo} already exists";
            return false;
         }  

         if(move_uploaded_file($this->tmp_path, $target_path)){
            
                unset($this->tmp_path);
                return true;
            
         }else{
                  $this->errors[]=  "The file directory does not have the permission ";
                  return false;         
         }
    }








public function image_path_and_placeholder(){

    return empty($this->photo) ? $this->image_placeholder :$this->upload_directory.DS.$this->photo;
}   



public function delete_photo(){

       if($this->delete()){
           $target_path= SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->photo;
           
           // unlink: function php delete the file
           return unlink($target_path) ? true : false;
       }
       else{
           return false;  
       }



}// End Delete Photo





}

?>