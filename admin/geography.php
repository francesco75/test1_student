
<?php include("includes/header.php"); ?>
<?php include("includes/score.php");?>


<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back_geo"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4"><h2>  Test Geography</h2><br></div> 
             <div class="col-md-3"></div>  
        </div>
        <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2"><a class="btn btn-primary l2" href="test.php"> Back</a></div> 
                <div class="col-md-2"><a href="profile.php"><button type="button" class="btn btn-success prof1" >Profile</button></a></div>
                <div class="col-md-2"></div>
                <div class="col-md-4"><a href="logout.php"><button type="button" class="btn btn-success logo" >Logout</button></a></div>
            
        </div>
        <div class="row">
            
             <div class="col-md-4"> </div>
             <div class="col-md-4">
                        <br>
                        <h3>Basic Geography Questions</h3><br>
                            <div id="demo"></div>
                     <form method="post"  action="" >
                              
                         <div class="form-group">
                          <h5> Question 1</h5>
                              <h6>1. Which river flows through the Grand Canyon? </h6>
                              <input type="radio"  name="q1" value="Mississippi River"  required  >
                                <label for="Mississippi River">Mississippi River</label><br> 
                              <input type="radio"  name="q1" value="Colorado" required  >
                                <label for="Colorado">Colorado</label><br>
                              <input type="radio"  name="q1" value="Ohio River" required >
                                <label for="Ohio River">Ohio River</label><br> 
                              <?php 
                                    
                                    if ($question3){
                                    $test=$question3->q1;    
                                    $studio->counter($test,$q1);
                                }
                              ?>
                        </div>
                        
                         <div class="form-group">
                              <h5> Question 2</h5>
                              <h6>2. What is the capital of Serbia? </h6>
                              <input type="radio"  name="q2" value="Belgrade" required >
                                <label for="Belgrade">Belgrade</label><br> 
                              <input type="radio"  name="q2" value="Zagreb" required >
                                <label for="Zagreb">Zagreb</label><br>
                              <input type="radio"  name="q2" value="Ljubljana" required >
                                <label for="Ljubljana">Ljubljana</label><br>
                          <?php 

                                   if ($question3){
                                     $test=$question3->q2;     
                                    $studio->counter($test,$q2);                          
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 3</h5>
                              <h6>3. In which country would you visit Machu Picchu? </h6>
                              <input type="radio"  name="q3" value="Bolivia" required >
                                <label for="Bolivia">Bolivia</label><br> 
                              <input type="radio"  name="q3" value="Paraguay" required >
                                <label for="Paraguay">Paraguay</label><br>
                              <input type="radio"  name="q3" value="Peru" required >
                                <label for="Peru">Peru</label><br>
                           <?php if($question3){
                                       $test=$question3->q3; 
                                      $studio->counter($test,$q3);
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 4</h5>
                              <h6>4. What is the deepest lake in the world? </h6>
                              <input type="radio"  name="q4" value="Lake Baikal in Russia" required >
                                <label for="Lake Baikal in Russia">Lake Baikal in Russia</label><br> 
                              <input type="radio"  name="q4" value="Great Slave Lake" required >
                                <label for="Great Slave Lake">Great Slave Lake</label><br>
                              <input type="radio"  name="q4" value="Lake Titicaca" required >
                                <label for="Lake Titicaca">Lake Titicaca</label><br>
                             <?php if($question3){
                                      $test=$question3->q4; 
                                    $studio->counter($test,$q4); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 5</h5>
                              <h6>5. What is the longest river in China? </h6>
                              <input type="radio"  name="q5" value="Yellow River" required >
                                <label for="Yellow River">Yellow River</label><br> 
                              <input type="radio"  name="q5" value="Yangzte"required >
                                <label for="Yangzte">Yangzte</label><br>
                              <input type="radio"  name="q5" value="Amur" required>
                                <label for="Amur">Amur</label><br>
                            <?php if($question3){
                                       $test=$question3->q5; 
                                      $studio->counter($test,$q5);  
                               }

                          ?>
                         </div>
                         
                          <div class="form-group">
                              <h5> Question 6</h5>
                              <h6>6. What is the highest mountain in Europe? </h6>
                              <input type="radio"  name="q6" value="Mont Blanc" required >
                                <label for="Mont Blanc">Mont Blanc</label><br> 
                              <input type="radio"  name="q6" value="Musala" required >
                                <label for="Musala">Musala</label><br>
                              <input type="radio"  name="q6" value="Mount Elbrus in Russia"required >
                                <label for="Mount Elbrus in Russia">Mount Elbrus in Russia</label><br>
                            <?php if($question3){
                                  $test=$question3->q6; 
                                 $studio->counter($test,$q6); 
                               }

                          ?>
                         </div>
                        
                          <div class="form-group">
                            <h5> Question 7</h5>
                              <h6>7. The equator passes through how many countries?</h6>
                              <input type="radio"  name="q7" value="13" required >
                                <label for="13">13</label><br> 
                              <input type="radio"  name="q7" value="14" required>
                                <label for="14">14</label><br>
                              <input type="radio"  name="q7" value="15" required >
                                <label for="15">15</label><br>
                            <?php if($question3){
                                     $test=$question3->q7; 
                                    $studio->counter($test,$q7); 
                                    }                               
                                

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 8</h5>
                              <h6>8.How many states is Australia divided into? </h6>
                              <input type="radio"  name="q8" value="7" required >
                                <label for="7">7</label><br> 
                              <input type="radio"  name="q8" value="6" required >
                                <label for="6">6</label><br>
                              <input type="radio"  name="q8" value="5" required >
                                <label for="5">5</label><br>
                           <?php if($question3){
                                  $test=$question3->q8; 
                                 $studio->counter($test,$q8); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 9</h5>
                              <h6>9.Which Italian city is famous for its canals?
                               </h6>
                              <input type="radio"  name="q9" value="Bologna" required >
                                <label for="Bologna">Bologna</label><br> 
                              <input type="radio"  name="q9" value="Florence" required >
                                <label for="Florence">Florence</label><br>
                              <input type="radio"  name="q9" value="Venice" required >
                                <label for="Venice">Venice</label><br>
                           <?php if($question3){
                                  $test=$question3->q9; 
                                 $studio->counter($test,$q9); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 10</h5>
                              <h6>10. How many countries are there in South America?  </h6>
                              <input type="radio"  name="q10" value="15"  required >
                                <label for="15">15</label><br> 
                              <input type="radio"  name="q10" value="16" required >
                                <label for="16">16</label><br>
                              <input type="radio"  name="q10" value="12" required >
                                <label for="12">12</label><br>
                             <?php if($question3){
                                 $test=$question3->q10; 
                                 $studio->counter($test,$q10); 
                               }

                          ?>
                         </div>
                        
                            
                            <?php if ($question3):?>
                                <a class="btn btn-success" href="geography.php">Try Again</a>
                            <?php else:?>    
                               <input type="submit" name="score"   class="bnt btn-primary pull-right "  value="Ckeck Score >" >
                            <?php endif?>    
                     </form>
             </div>
             <div class="col-md-4">
                <br>
                <script>
                    document.getElementById("demo").innerHTML = "<?php 
                                    if($question3){
                                       if($studio->countIn==10){
                                          $studio->count=0;
                                         } 
                                           echo " <h2>Your score is  ". $studio->count ." /10</h2>";
                                           $studio->value="vgeo";
                                           $studio->update($studio->count,$studio->value);
                                    }
                                    
                                ?>";
                  
                   </script>              
             </div>
        </div>
     </div>
     </div>
  
    
     <?php include("includes/footer.php"); ?>
         