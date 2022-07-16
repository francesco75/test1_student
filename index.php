
<?php include("includes/header.php"); ?>
<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back2"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4"><h2 class="center">Student</h2><br></div> 
             <div class="col-md-3"></div>  
        </div>
        <div class="row">
            <?php if($session->is_signed_in()):?>            
                <div class="col-md-5">   </div>
                <div class="col-md-1"><a href="xampp1/htdocs1/learn/admin/logout.php"><button type="button" class="btn btn-success" >Logout</button></a></div>
                <div class="col-md-6"></div>
            <?php else:?>
            <div class="col-md-5"></div>
            <div class="col-md-1 separate"><a  href="xampp1/htdocs1/learn/admin/register.php"><button type="button" class="btn btn-success link" >Register</button></a></div>
            <div class="col-md-6 "><a  href="xampp1/htdocs1/learn/admin/login.php"><button type="button" class="btn btn-success link1" >Login</button></a></div> 
            <?php endif;?>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><hr class="line"></div>
            <div class="col-md-4"></div>

        </div>
         <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h5>Celebrate your Successes</h5>
                <p class="par1">
                Successes” does not just mean As or perfect scores. Praise them for improving your grades, even if you don’t score a 100%. Recognize the hard work you put into your project, to working through a problem with your group, or in conducting research for your paper. Celebrate figuring out how to create your presentation online or helping a classmate with an assignment. A little bit of positive recognition can go a long way and make you feel seen and valued.</p></div>
            <div class="col-md-4"></div>
        </div>
     </div>
 </div>
     <?php include("includes/footer.php"); ?>
         