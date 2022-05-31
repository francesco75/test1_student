
<?php include("includes/header.php"); ?>
<?php include("includes/score.php");?>


<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back1"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4"><h2>  Test Math</h2><br></div> 
             <div class="col-md-3"></div>  
        </div>
        <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2"><a class="btn btn-primary l2" href="test.php"> Back</a></div> 
                <div class="col-md-2"><a href="profile.php"><button type="button" class="btn btn-success prof1" >Profile</button></a></div>
                <div class="col-md-2"><a class="btn btn-primary geo" href="geometry.php">Geometry</a></div>
                <div class="col-md-4"><a href="logout.php"><button type="button" class="btn btn-success logo" >Logout</button></a></div>
                
            
        </div>
        <div class="row">
            
             <div class="col-md-4"> </div>
             <div class="col-md-4">
                        <br>
                        <h3>Basic  Algebra</h3><br>
                            <div id="demo"></div>
                     <form method="post"  action="" >
                              
                         <div class="form-group">
                          <h5> Question 1</h5>
                              <h6>1. Simplify 4a + 12a </h6>
                              <input type="radio"  name="q1" value="16a<sup>2</sup>"  required  >
                                <label for="16a2">16a<sup>2</sup></label><br> 
                              <input type="radio"  name="q1" value="16a" required  >
                                <label for="16a">16a</label><br>
                              <input type="radio"  name="q1" value="16aa" required >
                                <label for="16aa">16aa</label><br> 
                              <?php 
                                    
                                    if ($question){
                                    $test=$question->q1;    
                                    $studio->counter($test,$q1);
                                }
                              ?>
                        </div>
                        
                         <div class="form-group">
                              <h5> Question 2</h5>
                              <h6>2. Simplify 6i+2j-3k+5j+4k </h6>
                              <input type="radio"  name="q2" value="6i+7j+k" required >
                                <label for="6i+7j+k">6i+7j+k</label><br> 
                              <input type="radio"  name="q2" value="6i+7j-k" required >
                                <label for="6i+7i-k">6i+7j-k</label><br>
                              <input type="radio"  name="q2" value="20ijk" required >
                                <label for="20ijk">20ijk</label><br>
                          <?php 

                                   if ($question){
                                     $test=$question->q2;     
                                    $studio->counter($test,$q2);                          
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 3</h5>
                              <h6>3. Expand 2(z+3) </h6>
                              <input type="radio"  name="q3" value="2z+3" required >
                                <label for="2z+3">2z+3</label><br> 
                              <input type="radio"  name="q3" value="2z+6" required >
                                <label for="2z+6">2z+6</label><br>
                              <input type="radio"  name="q3" value="6z" required >
                                <label for="6z">6z</label><br>
                           <?php if($question){
                                       $test=$question->q3; 
                                      $studio->counter($test,$q3);
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 4</h5>
                              <h6>4. Expand -3(2z-4) </h6>
                              <input type="radio"  name="q4" value="-6z-12" required >
                                <label for="-6z-12">-6z-12</label><br> 
                              <input type="radio"  name="q4" value="6z+12" required >
                                <label for="6z+12">6z+12</label><br>
                              <input type="radio"  name="q4" value="-6z+12" required >
                                <label for="-6z+12">-6z+12</label><br>
                             <?php if($question){
                                      $test=$question->q4; 
                                    $studio->counter($test,$q4); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 5</h5>
                              <h6>5. Simplify 2(j+3)+4(2j+1) </h6>
                              <input type="radio"  name="q5" value="10j+10" required >
                                <label for="10j+10">10j+10</label><br> 
                              <input type="radio"  name="q5" value="10j+4"required >
                                <label for="10j+4">10j+4</label><br>
                              <input type="radio"  name="q5" value="4j+6" required>
                                <label for="4j+6">4j+6</label><br>
                            <?php if($question){
                                       $test=$question->q5; 
                                      $studio->counter($test,$q5);  
                               }

                          ?>
                         </div>
                         
                          <div class="form-group">
                              <h5> Question 6</h5>
                              <h6>6. Simplify 3(f-2)-4(-f+2) </h6>
                              <input type="radio"  name="q6" value="7f+2" required >
                                <label for="7f+2">7f+2</label><br> 
                              <input type="radio"  name="q6" value="-f+2" required >
                                <label for="-f+2">-f+2</label><br>
                              <input type="radio"  name="q6" value="7f-14"required >
                                <label for="7f-14">7f-14</label><br>
                            <?php if($question){
                                  $test=$question->q6; 
                                 $studio->counter($test,$q6); 
                               }

                          ?>
                         </div>
                        
                          <div class="form-group">
                              <h5> Question 7</h5>
                              <h6>7. What is the value of 3y when y = 12  </h6>
                              <input type="radio"  name="q7" value="312" required >
                                <label for="312">312</label><br> 
                              <input type="radio"  name="q7" value="15" required>
                                <label for="15">15</label><br>
                              <input type="radio"  name="q7" value="36" required >
                                <label for="36">36</label><br>
                            <?php if($question){
                                     $test=$question->q7; 
                                    $studio->counter($test,$q7); 
                                    }                               
                                

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 8</h5>
                              <h6>8. What is the value of -3p + 2q when p = -6 and q = 4 ? </h6>
                              <input type="radio"  name="q8" value="26" required >
                                <label for="26">26</label><br> 
                              <input type="radio"  name="q8" value="-10" required >
                                <label for="-10">-10</label><br>
                              <input type="radio"  name="q8" value="10" required >
                                <label for="10">10</label><br>
                           <?php if($question){
                                  $test=$question->q8; 
                                 $studio->counter($test,$q8); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 9</h5>
                              <h6>9.Mrs Matthews wants to see how many books she can fit into her classroom. She has <i><b>c</b></i> shelves which can each hold 12 books and <i><b>d</b></i> cupboards which can each hold 36 books. Write an expression for the total number of books she can fit into her classroom. 
                               </h6>
                              <input type="radio"  name="q9" value="48c+d" required >
                                <label for="48C+D">48<i><b>c</b></i>+<i><b>d</b></i></label><br> 
                              <input type="radio"  name="q9" value="12c+36d" required >
                                <label for="12C+36D">12<i><b>c</b></i>+36<i><b>d</b></i></label><br>
                              <input type="radio"  name="q9" value="48cd" required >
                                <label for="48CD">48<i><b>c</b></i><i><b>d</b></i></label><br>
                           <?php if($question){
                                  $test=$question->q9; 
                                 $studio->counter($test,$q9); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 10</h5>
                              <h6>10. If Mrs Matthews has 5 shelves and 2 cupboards, how many books can she fit into her classroom? </h6>
                              <input type="radio"  name="q10" value="132"  required >
                                <label for="132">132</label><br> 
                              <input type="radio"  name="q10" value="204" required >
                                <label for="204">204</label><br>
                              <input type="radio"  name="q10" value="487" required >
                                <label for="487">487</label><br>
                             <?php if($question){
                                 $test=$question->q10; 
                                 $studio->counter($test,$q10); 
                               }

                          ?>
                         </div>
                        
                            
                            <?php if ($question):?>
                                <a class="btn btn-success" href="math.php">Try Again</a>
                            <?php else:?>    
                               <input type="submit" name="score"   class="bnt btn-primary pull-right "  value="Ckeck Score >" >
                            <?php endif?>    
                     </form>
             </div>
             <div class="col-md-4">
                <br>
                <script>
                    document.getElementById("demo").innerHTML = "<?php 
                                    if($question){
                                         if($studio->countIn==10){
                                          $studio->count=0;
                                         } 
                                          echo " <h2>Your score is  ". $studio->count ." /10</h2>";
                                           $studio->value="va";
                                           $studio->update($studio->count,$studio->value);                                           
                                    }
                                ?>";
                  
                   </script>              
             </div>
        </div>
     </div>
     </div>

     <?php include("includes/footer.php"); ?>
         