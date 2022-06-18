<?php include("includes/header.php"); ?>
<?php ob_start(); ?>
<?php if(!$session->is_signed_in()) { redirect("login.php");}?>
<?php

if(empty($_GET['id'])){
   header("Location: profile.php");
} 
$student_update=Students::find_by_student($_GET['id']); 

if(isset($_POST['update'])){
 
  
if($student_update){
  $student_update->first_name=$_POST['first_name'];
  $student_update->last_name=$_POST['last_name'];
  $student_update->password=$_POST['password'];
  $student_update->age=$_POST['age'];

  $student_update->last_name=$database->escape_string($student_update->last_name); 
  $student_update->password=$database->escape_string($student_update->password);

  $student_update->password = password_hash( $student_update->password, PASSWORD_BCRYPT, array('cost' => 12)); 

  if (empty($_FILES['photo'])){
    $student_update->save();
     header("Location: profile.php");
  }else{

  $student_update->set_file($_FILES['photo']);
  $student_update->upload_photo();
  $student_update->save();
   header("Location: profile.php");
  }

}

}
?>

     <body>
        <?php include("includes/jumbotron.php"); ?>
            <div class="back2"><div class="overlay3"></div>
             <div class="container-fluid">
                  
                <!-- Page Heading -->
                <div class="row">
                   
                    <div class="col-lg-12">
                        <h1>
                           Student 
                            <small>Update</small>
                        </h1>
                     <div class="col-md-6  ">                       
                     <img class="admin-user-thumbnail user_image" src="<?php echo $student_update->image_path_and_placeholder(); ?>" alt="">
                     </div>

                <form action="" method="post" enctype="multipart/form-data">  
                     <div class="col-md-6 ">

                       <div class="form-group">
  
                             <input type="file" name="photo"  >
                         </div>
                         <div class="form-group">
                              <label for="first name">First Name</label>
                             <input type="text" name="first_name" class="form-control" value="<?php echo $student_update->first_name; ?>" >
                         </div>
                         <div class="form-group">
                              <label for="last name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="<?php echo $student_update->last_name; ?>">
                         </div>
                         <div class="form-group">
                              <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" value="" >
                         </div>
                         <div class="form-group">
                              <label for="Age">Age</label>
                            <input type="number" name="age" class="form-control" value="<?php echo $student_update->age; ?>" >
                         </div>
                        <div class="form-group">
                            
                            <input type="submit" name="update" class="bnt btn-primary pull-right " value="Update" >
                         </div>
                     </div>
                </form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
          </div>
          
            <!-- /.container-fluid -->
  <?php include("includes/footer.php"); ?>