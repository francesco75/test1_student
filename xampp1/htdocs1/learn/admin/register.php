<?php include("includes/header.php"); ?>
<?php


$student= New Students();


if (isset($_POST['submit'])){
    if($student){
    $student->first_name=trim($_POST['first_name']);
    $student->last_name=trim($_POST['last_name']);
    $student->password=trim($_POST['password']);
    $student->age=$_POST['age'];
    $student->va=0;
    $student->vg=0;
    $student->vgeo=0;
    $student->vh=0;
    $student->vs=0; 
    $student->vart=0; 
    $student->vmus=0; 

    $student->last_name=$database->escape_string($student->last_name);
    $student->password=$database->escape_string($student->password);

    
    
     if ($student->student_exist($student->last_name)){
          $message= "<h6>Student Exist</h6>";
     }
  

   elseif (!empty($student->last_name) && !empty($student->password)){
           $student->password = password_hash( $student->password, PASSWORD_BCRYPT, array('cost' => 12));
           $student->set_file($_FILES['photo']);
           $student->upload_photo();
           $student->save();  
           header("Location: login.php");
    }
    else {
            $message= "<h6>Fields can't be empty</h6>";
    }


   }
}
else{
      $message="";
}


?>


<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back2"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
                <div class="col-md-4"><h2>Registration Student</h2><br></div> 
             <div class="col-md-3"></div>  

        </div>
        <div class="row">
            <div class="col-md-5"></div>

  <div class="col-md-4">

<form  action="register.php" method="post" enctype="multipart/form-data">
      <?php  echo  $message; ?>
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" name="first_name" value="" ><br>
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" name="last_name" value="" ><br>
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" value=""><br>
    <label for="age">Age</label>
    <input type="number" class="form-control" name="age" value="" ><br>
    <label for="photo">Photo</label>
    <input type="file" class="form-control" name="photo" ><br>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>


</div>
<div class="col-md-3"></div> 
        </div>
     </div>
 </div>
     <?php include("includes/footer.php"); ?>