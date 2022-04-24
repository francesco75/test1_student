
<?php include("includes/header.php"); ?>
<?php include("includes/score.php");?>


<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back_hist"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4"><h2>  Test History</h2><br></div> 
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
                        <h3>Basic  History Questions</h3><br>
                            <div id="demo"></div>
                     <form method="post"  action="" >
                              
                         <div class="form-group">
                          <h5> Question 1</h5>
                              <h6>1. In which month of 1914 did the First World War begin? </h6>
                              <input type="radio"  name="q1" value="August"  required  >
                                <label for="August">August</label><br> 
                              <input type="radio"  name="q1" value="March" required  >
                                <label for="March">March</label><br>
                              <input type="radio"  name="q1" value="November" required >
                                <label for="November">November</label><br> 
                              <?php 
                                    
                                    if ($question2){
                                    $test=$question2->q1;    
                                    $studio->counter($test,$q1);
                                }
                              ?>
                        </div>
                        
                         <div class="form-group">
                              <h5> Question 2</h5>
                              <h6>2. Who became Prime Minister of Britain in 1916? </h6>
                              <input type="radio"  name="q2" value="David Lloyd George" required >
                                <label for="David Lloyd George">David Lloyd George</label><br> 
                              <input type="radio"  name="q2" value="Stanley Baldwin" required >
                                <label for="Stanley Baldwin">Stanley Baldwin</label><br>
                              <input type="radio"  name="q2" value="Winston Leonard Spencer Churchill," required >
                                <label for="Winston Leonard Spencer Churchill">Winston Leonard Spencer Churchill,</label><br>
                          <?php 

                                   if ($question2){
                                     $test=$question2->q2;     
                                    $studio->counter($test,$q2);                          
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 3</h5>
                              <h6>3. Which member of the British royal family was murdered by the IRA in 1979? </h6>
                              <input type="radio"  name="q3" value="Mark Phillips" required >
                                <label for="Mark Phillips">Mark Phillips</label><br> 
                              <input type="radio"  name="q3" value="Jack Brooksbank" required >
                                <label for="Jack Brooksbank">Jack Brooksbank</label><br>
                              <input type="radio"  name="q3" value="Lord Mountbatten" required >
                                <label for="Lord Mountbatten">Lord Mountbatten</label><br>
                           <?php if($question2){
                                       $test=$question2->q3; 
                                      $studio->counter($test,$q3);
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 4</h5>
                              <h6>4. Name the Roman gladiator and rebel who led a revolt against the Roman Empire between 73 and 71 BC.? </h6>
                              <input type="radio"  name="q4" value="Spartacus" required >
                                <label for="Spartacus">Spartacus</label><br> 
                              <input type="radio"  name="q4" value="Caligula" required >
                                <label for="Caligula">Caligula</label><br>
                              <input type="radio"  name="q4" value="Maximus" required >
                                <label for="Maximus">Maximus</label><br>
                             <?php if($question2){
                                      $test=$question2->q4; 
                                    $studio->counter($test,$q4); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 5</h5>
                              <h6>5. Who was the world’s first woman Prime Minister? </h6>
                              <input type="radio"  name="q5" value="Indira Gandhi" required >
                                <label for="Indira Gandhi">Indira Gandhi</label><br> 
                              <input type="radio"  name="q5" value="Golda Meir"required >
                                <label for="Golda Meir">Golda Meir</label><br>
                              <input type="radio"  name="q5" value="Sirimavo Bandaranaike" required>
                                <label for="Sirimavo Bandaranaike">Sirimavo Bandaranaike</label><br>
                            <?php if($question2){
                                       $test=$question2->q5; 
                                      $studio->counter($test,$q5);  
                               }

                          ?>
                         </div>
                         
                          <div class="form-group">
                              <h5> Question 6</h5>
                              <h6>6. Yuan, Qing and Ming were Imperial Dynasties in the history of which country? </h6>
                              <input type="radio"  name="q6" value="South Korea" required >
                                <label for="South Korea">South Korea</label><br> 
                              <input type="radio"  name="q6" value="China" required >
                                <label for="China">China</label><br>
                              <input type="radio"  name="q6" value="Vietnam"required >
                                <label for="Vietnam">Vietnam</label><br>
                            <?php if($question2){
                                  $test=$question2->q6; 
                                 $studio->counter($test,$q6); 
                               }

                          ?>
                         </div>
                        
                          <div class="form-group">
                            <h5> Question 7</h5>
                              <h6>7. What year was the america discovered ?</h6>
                              <input type="radio"  name="q7" value="1490" required >
                                <label for="1490">1490</label><br> 
                              <input type="radio"  name="q7" value="1492" required>
                                <label for="1492">1492</label><br>
                              <input type="radio"  name="q7" value="1494" required >
                                <label for="1494">1494</label><br>
                            <?php if($question2){
                                     $test=$question2->q7; 
                                    $studio->counter($test,$q7); 
                                    }                               
                                

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 8</h5>
                              <h6>8. How many wives did Henry VIII have? </h6>
                              <input type="radio"  name="q8" value="7" required >
                                <label for="7">7</label><br> 
                              <input type="radio"  name="q8" value="6" required >
                                <label for="6">6</label><br>
                              <input type="radio"  name="q8" value="5" required >
                                <label for="5">5</label><br>
                           <?php if($question2){
                                  $test=$question2->q8; 
                                 $studio->counter($test,$q8); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 9</h5>
                              <h6>9.Which empire was ruled by the Ptolemaic dynasty from 305 BC until 30 BC?
                               </h6>
                              <input type="radio"  name="q9" value="Babylonians" required >
                                <label for="Babylonians">Babylonians</label><br> 
                              <input type="radio"  name="q9" value="Egyptian" required >
                                <label for="Egyptian">Egyptian</label><br>
                              <input type="radio"  name="q9" value="Sumeri" required >
                                <label for="Sumeri">Sumeri</label><br>
                           <?php if($question2){
                                  $test=$question2->q9; 
                                 $studio->counter($test,$q9); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 10</h5>
                              <h6>10. In what year was the Russian Revolution? </h6>
                              <input type="radio"  name="q10" value="1915"  required >
                                <label for="1915">1915</label><br> 
                              <input type="radio"  name="q10" value="1916" required >
                                <label for="1916">1916</label><br>
                              <input type="radio"  name="q10" value="1917" required >
                                <label for="1917">1917</label><br>
                             <?php if($question2){
                                 $test=$question2->q10; 
                                 $studio->counter($test,$q10); 
                               }

                          ?>
                         </div>
                        
                            
                            <?php if ($question2):?>
                                <a class="btn btn-success" href="history.php">Try Again</a>
                            <?php else:?>    
                               <input type="submit" name="score"   class="bnt btn-primary pull-right "  value="Ckeck Score >" >
                            <?php endif?>    
                     </form>
             </div>
             <div class="col-md-4">
                <br>
                <script>
                    document.getElementById("demo").innerHTML = "<?php 
                                    if($question2){
                                        if($studio->countIn==10){
                                          $studio->count=0;
                                         } 
                                           echo " <h2>Your score is  ". $studio->count ." /10</h2>";
                                           $studio->value="vh";
                                           $studio->update($studio->count,$studio->value);
                                    }
                                    
                                ?>";
                  
                   </script>              
             </div>
        </div>
     </div>
     </div>
  
    
     <?php include("includes/footer.php"); ?>
         