<?php include("includes/header.php"); ?>
<?php
if($session->is_signed_in()){
    //redirect("index.php");
    header("Location: index.php");
}


if (isset($_POST['submit'])){

$lastname=trim($_POST['last_name']);
$password=trim($_POST['password']);



// Method to ckeck Database user


$student_found= Students::verify_user($lastname,$password);


if ($student_found) {
   
    $session->login($student_found);
    header("Location: test.php");
   
}
else{
     $the_message=" Your password or lastname are incorrect ";
}

}else{
       $lastname = "";
       $password = "";
       $the_message="";

}
    
    



?>


<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back2"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
            </div>
            <div class="col-md-4"><h2>Login Student</h2><br></div> 
             <div class="col-md-3">
                 
             </div>  
        </div>
        <div class="row">
            <div class="col-md-5"></div>
  <div class="col-md-4">
      <h4 class="bg-danger"><?php echo $the_message;?></h4>

<form  action="login.php" method="post">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" name="last_name" value="" ><br>
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" value=""><br>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">

</form>
</div>
<div class="col-md-3"></div> 
        </div>
     </div>
</div>
     <?php include("includes/footer.php"); ?>