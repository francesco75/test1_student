<?php include("includes/header.php"); ?>
       

  


<?php

// Method to find the Student

$student_found= Students::find_by_student($_SESSION['user_id']);

?>



<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back2"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-2"><a class="btn btn-success prof1" href="test.php">Test</a> 
            </div>
            <div class="col-sm-4"><h2 class="center">Student</h2><br></div> 
             <div class="col-sm-3">
             <a href="logout.php"><button type="button" class="btn btn-success logo" >Logout</button></a>                 
             </div>  
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-3"><img class="admin-user-thumbnail user_image profile" src="<?php echo $student_found->image_path_and_placeholder();?>" alt="">
            </div>

            <div class="col-sm-4"><h4><?php echo "Name: ".$student_found->first_name; ?></h4>
                        <h4><?php echo "Last Name: ".$student_found->last_name; ?></h4> 
                        <h4><?php echo "Age: ".$student_found->age; ?></h4><br>
                        <a class="btn btn-success" href="update.php?id=<?php echo $student_found->id;?>">Update</a>
                        <a class="btn btn-danger" href="delete_student.php?id=<?php echo $student_found->id;?>">Delete</a>
              </div>
<div class="col-sm-3">
       <table class="table responsive">
           <thead>
               <tr>
                   <th>
                      School Subject
                   </th>
                   <th>
                        Mark

                   </th>
               </tr>
           </thead>
             <tbody>
                 <tr>
                     <td><a href="math.php">Algebra</a></td>
                     <td><?php echo $student_found->va;?></td>
                 </tr>
                 <tr>
                     <td><a href="geometry.php">Geometry</a></td>
                     <td><?php echo $student_found->vg;?></td>
                 </tr>
                 <tr>
                     <td><a href="history.php">History</a></td>
                     <td><?php echo $student_found->vh;?></td>
                 </tr>
                 <tr>
                     <td><a href="geography.php">Geography</a></td>
                     <td><?php echo $student_found->vgeo;?></td>
                 </tr>
                  <tr>
                     <td><a href="science.php">Science</a></td>
                     <td><?php echo $student_found->vs;?></td>
                 </tr>
                 <tr>
                     <td><a href="art.php">Art</a></td>
                     <td><?php echo $student_found->vart;?></td>
                 </tr>
                   <tr>
                     <td><a href="music.php">Music</a></td>
                     <td><?php echo $student_found->vmus;?></td>
                 </tr>               
             </tbody>

       </table>
    </div> 
</div>


        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
        
                <div id="barchart_values"  style="width: 80%; min-height: 300px;"></div>

            </div>
            <div class="col-sm-3"></div>



        </div>
     </div>
</div>
     <?php include("includes/footer.php"); ?>