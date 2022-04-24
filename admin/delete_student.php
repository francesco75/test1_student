<?php include("includes/init.php"); ?>
<?php if(!$session->is_signed_in()) { header("Location:logout.php");}?>
<?php

if(empty($_GET['id'])){
    header("Location:logout.php");
}
$user=Students::find_by_student($_GET['id']);


if ($user){
	$session->message("The user {$user->first_name} has been deleted");

    $user->delete_photo();
    header("Location:logout.php");
}else{
    header("Location:logout.php");
}    

?>