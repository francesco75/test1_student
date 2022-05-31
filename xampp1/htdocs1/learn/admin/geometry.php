
<?php include("includes/header.php"); ?>
<?php include("includes/score.php");?>


<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back1"><div class="overlay3"></div>
     <div class="container-fluid ">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4"><h2>  Test Math</h2><br></div> 
             <div class="col-md-3"></div>  
        </div>


        <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2"><a class="btn btn-primary l2" href="test.php"> Back</a></div> 
                <div class="col-md-2"><a href="profile.php"><button type="button" class="btn btn-success prof1" >Profile</button></a></div>
                <div class="col-md-2"><a class="btn btn-primary geo" href="math.php">Algebra</a></div>
                <div class="col-md-4"><a href="logout.php"><button type="button" class="btn btn-success logo" >Logout</button></a></div>
                
        </div>
        <div class="row">
            
             <div class="col-md-4"> </div>
             <div class="col-md-4 ">
                        <br>
                        <h3>Basic  Geometry</h3><br>
                            <div id="demo"></div>
                     <form method="post"  action="" >
                              
                         <div class="form-group">
                          <h5> Question 1</h5>
                              <h6>1. How many edges does a cube has ? </h6>
                              <input type="radio"  name="q1" value="10"  required  >
                                <label for="10">10</label><br> 
                              <input type="radio"  name="q1" value="12" required  >
                                <label for="12">12</label><br>
                              <input type="radio"  name="q1" value="14" required >
                                <label for="14">14</label><br> 
                              <?php 
                                    
                                    if ($question1){
                                    $test=$question1->q1;    
                                    $studio->counter($test,$q1);
                                }
                              ?>
                        </div>
                        
                         <div class="form-group">
                              <h5> Question 2</h5>
                              <h6>2. The angle which is less than 90 degrees is called? </h6>
                              <input type="radio"  name="q2" value="Acute angle" required >
                                <label for="Acute angle">Acute angle</label><br> 
                              <input type="radio"  name="q2" value="Obtuse angle" required >
                                <label for="Obtuse angle">Obtuse angle</label><br>
                              <input type="radio"  name="q2" value="Right angle" required >
                                <label for="Right angle">Right angle</label><br>
                          <?php 

                                   if ($question1){
                                     $test=$question1->q2;     
                                    $studio->counter($test,$q2);                          
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 3</h5>
                              <h6>3. The points A (9, 0), B (9, 6), C (–9, 6) and D (–9, 0) are the vertices of a </h6>
                              <input type="radio"  name="q3" value="Rectangle" required >
                                <label for="Rectangle">Rectangle</label><br> 
                              <input type="radio"  name="q3" value="Square" required >
                                <label for="Square">Square</label><br>
                              <input type="radio"  name="q3" value="Trapezium" required >
                                <label for="Trapezium">Trapezium</label><br>
                           <?php if($question1){
                                       $test=$question1->q3; 
                                      $studio->counter($test,$q3);
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 4</h5>
                              <h6>4. The midpoints of a line segment joining two points A(2, 4) and B(-2, -4) </h6>
                              <input type="radio"  name="q4" value="(-1,4)" required >
                                <label for="(-1,4)">(-1,4)</label><br> 
                              <input type="radio"  name="q4" value="(2,-2)" required >
                                <label for="(2,-2)">(2,-2)</label><br>
                              <input type="radio"  name="q4" value="(0, 0)" required >
                                <label for="(0, 0)">(0, 0)</label><br>
                             <?php if($question1){
                                      $test=$question1->q4; 
                                    $studio->counter($test,$q4); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 5</h5>
                              <h6>5. The locus of the equation xy + yz = 0 is </h6>
                              <input type="radio"  name="q5" value="a pair of perpendicular planes" required >
                                <label for="a pair of perpendicular planes">a pair of perpendicular planes</label><br> 
                              <input type="radio"  name="q5" value="a pair of parallel planes"required >
                                <label for="a pair of parallel planes">a pair of parallel planes</label><br>
                              <input type="radio"  name="q5" value="a pair of straight lines" required>
                                <label for="a pair of straight lines">a pair of straight lines</label><br>
                            <?php if($question1){
                                       $test=$question1->q5; 
                                      $studio->counter($test,$q5);  
                               }

                          ?>
                         </div>
                         
                          <div class="form-group">
                              <h5> Question 6</h5>
                              <h6>6. Find a relation between x and y if the points (x, y), (1, 2) and (7, 0) are collinear. </h6>
                              <input type="radio"  name="q6" value="x+7y=0" required >
                                <label for="x+7y=0">x+7y=0</label><br> 
                              <input type="radio"  name="q6" value="x+3y=7" required >
                                <label for="x+3y=7">x+3y=7</label><br>
                              <input type="radio"  name="q6" value="x=3y"required >
                                <label for="x=3y">x=3y</label><br>
                            <?php if($question1){
                                  $test=$question1->q6; 
                                 $studio->counter($test,$q6); 
                               }

                          ?>
                         </div>
                        
                          <div class="form-group">
                              <h5> Question 7</h5>
                              <h6>7. The area of the triangle ABC with the vertices A(-5, 7), B(-4, -5) and C(4, 5) is  </h6>
                              <input type="radio"  name="q7" value="60" required >
                                <label for="60">60</label><br> 
                              <input type="radio"  name="q7" value="53" required>
                                <label for="53">53</label><br>
                              <input type="radio"  name="q7" value="35" required >
                                <label for="35">35</label><br>
                            <?php if($question1){
                                     $test=$question1->q7; 
                                    $studio->counter($test,$q7); 
                                    }                               
                                

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 8</h5>
                              <h6>8. Find the value of k if the points P(2, 3), Q(4, k) and R(6, –3) are collinear. </h6>
                              <input type="radio"  name="q8" value="2" required >
                                <label for="2">2</label><br> 
                              <input type="radio"  name="q8" value="0" required >
                                <label for="0">0</label><br>
                              <input type="radio"  name="q8" value="4" required >
                                <label for="4">4</label><br>
                           <?php if($question1){
                                  $test=$question1->q8; 
                                 $studio->counter($test,$q8); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 9</h5>
                              <h6>9. what is pythagoras theorem ? c=hypotenuse a and b = legs
                               </h6>
                              <input type="radio"  name="q9" value="c=a+b" required >
                                <label for="c=a+b">c=a+b</label><br> 
                              <input type="radio"  name="q9" value="c<sup>2</sup>=a<sup>2</sup>+b<sup>2</sup>" required >
                                <label for="c<sup>2</sup>=a<sup>2</sup>+b<sup>2</sup>">c<sup>2</sup>=a<sup>2</sup>+b<sup>2</sup></label><br>
                              <input type="radio"  name="q9" value="c=a*b" required >
                                <label for="c=a*b">c=a*b</label><br>
                           <?php if($question1){
                                  $test=$question1->q9; 
                                 $studio->counter($test,$q9); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 10</h5>
                              <h6>10. A line makes angle P, Q, R with x-axis, y-axis and z-axis respectively then cos 2P + cos 2Q + cos 2R is equal to </h6>
                              <input type="radio"  name="q10" value="2"  required >
                                <label for="2">2</label><br> 
                              <input type="radio"  name="q10" value="-1" required >
                                <label for="-1">-1</label><br>
                              <input type="radio"  name="q10" value="-2" required >
                                <label for="-2">-2</label><br>
                             <?php if($question1){
                                 $test=$question1->q10; 
                                 $studio->counter($test,$q10); 
                               }

                          ?>
                         </div>
                        
                            
                            <?php if ($question1):?>
                                <a class="btn btn-success" href="geometry.php">Try Again</a>
                            <?php else:?>    
                               <input type="submit" name="score"   class="bnt btn-primary pull-right "  value="Ckeck Score >" >
                            <?php endif?>    
                     </form>
             </div>
             <div class="col-md-4">
                <br>
                <script>
                    document.getElementById("demo").innerHTML = "<?php 
                                    if($question1){
                                          if($studio->countIn==10){
                                          $studio->count=0;
                                         } 
                                           echo " <h2>Your score is  ". $studio->count ." /10</h2>";
                                           $studio->value="vg";
                                           $studio->update($studio->count,$studio->value);
                                    }
                                    
                                ?>";
                  
                   </script>              
             </div>
        </div>
     </div>
     
</div>
     <?php include("includes/footer.php"); ?>
         