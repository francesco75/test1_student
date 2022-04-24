
<?php include("includes/header.php"); ?>

<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-4"><br></div> 
             <div class="col-sm-3"></div>  
        </div>
        <div class="row">
            <?php if($session->is_signed_in()):?>            
                <div class="col-sm-5"></div>
                <div class="col-sm-1"><a href="logout.php"><button type="button" class="btn btn-success log" >Logout</button></a></div>
                <div class="col-sm-6"><a href="profile.php"><button type="button" class="btn btn-success prof" >Profile</button></a></div>
                 
        </div>
        
        <div class="row">
            
            <div class="col-sm-3  ">
            <a href="math.php"><div class="wrapper1"><h2 class="general">Maths</h2></div></a></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 "><a href="history.php"><div class="wrapper2"><h2 class="general">History</h2></div></a></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3  "><div class="parent"><a href="geography.php"><div class="wrapper3"><div class="overlay"></div><h2 class="general1">Geography</h2></div></a></div></div>
            <div class="col-sm-1 "></div>
                          
        </div>  
        <div class="row">
            
            <div class="col-sm-3" ><div class="parent"><a href="science.php"><div class="wrapper4"><h2 class="general">Science</h2></div></a>></div></div>
            <div class="col-sm-1 "></div>
            <div class="col-sm-3 "><div class="parent"><a href="art.php"><div class="wrapper5"><div class="overlay1"></div><h2 class="general2">Art</h2></div></a></div></div>
            <div class="col-sm-1 "></div>
            <div class="col-sm-3 " ><div class="parent"><a href="music.php"><div class="wrapper6"><h2 class="general2">Music</h2></div></a></div></div>
            <div class="col-sm-1"></div>
        </div>          
            <?php endif;?>
        </div>
     </div>
     <?php include("includes/footer.php"); ?>
         