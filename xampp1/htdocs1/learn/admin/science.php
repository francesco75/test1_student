
<?php include("includes/header.php"); ?>
<?php include("includes/score.php");?>


<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back_science"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4"><h2> <b> Test Science</b></h2><br></div> 
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
                        <h3><b>Basic Science Questions</b></h3><br>
                            <div id="demo"></div>
                     <form method="post"  action="" >
                              
                         <div class="form-group">
                          <h5> Question 1</h5>
                              <h6>1. The concept of gravity was discovered by which famous physicist? </h6>
                              <input type="radio"  name="q1" value="Sir Isaac Newton"  required  >
                                <label for="Sir Isaac Newton">Sir Isaac Newton</label><br> 
                              <input type="radio"  name="q1" value="Johannes Kepler" required  >
                                <label for="Johannes Kepler">Johannes Kepler</label><br>
                              <input type="radio"  name="q1" value="Nicolaus Copernicus" required >
                                <label for="Nicolaus Copernicus">Nicolaus Copernicusr</label><br> 
                              <?php 
                                    
                                    if ($question4){
                                    $test=$question4->q1;    
                                    $studio->counter($test,$q1);
                                }
                              ?>
                        </div>
                        
                         <div class="form-group">
                              <h5> Question 2</h5>
                              <h6>2. What is the hardest natural substance on Earth? </h6>
                              <input type="radio"  name="q2" value="Gold" required >
                                <label for="Gold">Gold</label><br> 
                              <input type="radio"  name="q2" value="Diamond" required >
                                <label for="Diamond">Diamond</label><br>
                              <input type="radio"  name="q2" value="Iron" required >
                                <label for="Iron">Iron</label><br>
                          <?php 

                                   if ($question4){
                                     $test=$question4->q2;     
                                    $studio->counter($test,$q2);                          
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 3</h5>
                              <h6>3. Which is the main gas that makes up the Earth's atmosphere? </h6>
                              <input type="radio"  name="q3" value="Oxygen" required >
                                <label for="Oxygen">Oxygen</label><br> 
                              <input type="radio"  name="q3" value="Argon" required >
                                <label for="Argon">Argon</label><br>
                              <input type="radio"  name="q3" value="Nitrogen" required >
                                <label for="Nitrogen">Nitrogen</label><br>
                           <?php if($question4){
                                       $test=$question4->q3; 
                                      $studio->counter($test,$q3);
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 4</h5>
                              <h6>4. Humans and chimpanzees share roughly how much DNA? </h6>
                              <input type="radio"  name="q4" value="95%" required >
                                <label for="95%">95%</label><br> 
                              <input type="radio"  name="q4" value="98%" required >
                                <label for="98%">98%</label><br>
                              <input type="radio"  name="q4" value="96%" required >
                                <label for="96%">96%</label><br>
                             <?php if($question4){
                                      $test=$question4->q4; 
                                    $studio->counter($test,$q4); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 5</h5>
                              <h6>5. What is the biggest planet in our solar system? </h6>
                              <input type="radio"  name="q5" value="Venus" required >
                                <label for="Venus">Venus</label><br> 
                              <input type="radio"  name="q5" value="Jupiter"required >
                                <label for="Jupiter">Jupiter</label><br>
                              <input type="radio"  name="q5" value="Neptune" required>
                                <label for="Neptune">Neptune</label><br>
                            <?php if($question4){
                                       $test=$question4->q5; 
                                      $studio->counter($test,$q5);  
                               }

                          ?>
                         </div>
                         
                          <div class="form-group">
                              <h5> Question 6</h5>
                              <h6>6. Which Apollo moon mission was the first to carry a lunar rover? </h6>
                              <input type="radio"  name="q6" value="Apollo 15" required >
                                <label for="Apollo 15c">Apollo 15</label><br> 
                              <input type="radio"  name="q6" value="Apollo 11" required >
                                <label for="Apollo 11">Apollo 11</label><br>
                              <input type="radio"  name="q6" value="Apollo 8"required >
                                <label for="Apollo 8">Apollo 8</label><br>
                            <?php if($question4){
                                  $test=$question4->q6; 
                                 $studio->counter($test,$q6); 
                               }

                          ?>
                         </div>
                        
                          <div class="form-group">
                            <h5> Question 7</h5>
                              <h6>7.How many bones are in the human body?</h6>
                              <input type="radio"  name="q7" value="213" required >
                                <label for="213">213</label><br> 
                              <input type="radio"  name="q7" value="206" required>
                                <label for="206">206</label><br>
                              <input type="radio"  name="q7" value="215" required >
                                <label for="215">215</label><br>
                            <?php if($question4){
                                     $test=$question4->q7; 
                                    $studio->counter($test,$q7); 
                                    }                               
                                

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 8</h5>
                              <h6>8.How many vertebrae does the average human possess ? </h6>
                              <input type="radio"  name="q8" value="33" required >
                                <label for="33">33</label><br> 
                              <input type="radio"  name="q8" value="36" required >
                                <label for="36">36</label><br>
                              <input type="radio"  name="q8" value="35" required >
                                <label for="35">35</label><br>
                           <?php if($question4){
                                  $test=$question4->q8; 
                                 $studio->counter($test,$q8); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 9</h5>
                              <h6>9.What name is given for the number of protons found in the nucleus of an atom ?
                               </h6>
                              <input type="radio"  name="q9" value="Isotopes" required >
                                <label for="Isotopes">Isotopes</label><br> 
                              <input type="radio"  name="q9" value="Nucleus" required >
                                <label for="Nucleus">Nuclues</label><br>
                              <input type="radio"  name="q9" value="Atomic number" required >
                                <label for="Atomic number">Atomic number</label><br>
                           <?php if($question4){
                                  $test=$question4->q9; 
                                 $studio->counter($test,$q9); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 10</h5>
                              <h6>10. How many teeth does an adult human have ?  </h6>
                              <input type="radio"  name="q10" value="35"  required >
                                <label for="35">35</label><br> 
                              <input type="radio"  name="q10" value="36" required >
                                <label for="36">36</label><br>
                              <input type="radio"  name="q10" value="32" required >
                                <label for="32">32</label><br>
                             <?php if($question4){
                                 $test=$question4->q10; 
                                 $studio->counter($test,$q10); 
                               }

                          ?>
                         </div>
                        
                            
                            <?php if ($question4):?>
                                <a class="btn btn-success" href="science.php">Try Again</a>
                            <?php else:?>    
                               <input type="submit" name="score"   class="bnt btn-primary pull-right "  value="Ckeck Score >" >
                            <?php endif?>    
                     </form>
             </div>
             <div class="col-md-4">
                <br>
                <script>
                    document.getElementById("demo").innerHTML = "<?php 
                                    if($question4){
                                       if($studio->countIn==10){
                                          $studio->count=0;
                                         } 
                                           echo " <h2>Your score is  ". $studio->count ." /10</h2>";
                                           $studio->value="vs";
                                           $studio->update($studio->count,$studio->value);
                                    }
                                    
                                ?>";
                  
                   </script>              
             </div>
        </div>
     </div>
     </div>
  
    
     <?php include("includes/footer.php"); ?>
         