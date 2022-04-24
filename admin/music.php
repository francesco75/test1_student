
<?php include("includes/header.php"); ?>
<?php include("includes/score.php");?>


<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back_classic"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4"><h2>  Test Music</h2><br></div> 
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
                        <h3> Classic Music Questions</h3><br>
                            <div id="demo"></div>
                     <form method="post"  action="" >
                              
                         <div class="form-group">
                          <h5> Question 1</h5>
                              <h6>1. Which of the following is an opera composed by Giacomo Puccini ? </h6>
                              <input type="radio"  name="q1" value="La Traviata"  required  >
                                <label for="La Traviata">La Traviata</label><br> 
                              <input type="radio"  name="q1" value="Madame Butterfly" required  >
                                <label for="Madame Butterfly">Madame Butterfly</label><br>
                              <input type="radio"  name="q1" value="Marriage of Figaro" required >
                                <label for="Marriage of Figaro">Marriage of Figaro</label><br> 
                              <?php 
                                    
                                    if ($question6){
                                    $test=$question6->q1;    
                                    $studio->counter($test,$q1);
                                }
                              ?>
                        </div>
                        
                         <div class="form-group">
                              <h5> Question 2</h5>
                              <h6>2. Which form of musical articulation can you NOT play on a piano ? </h6>
                              <input type="radio"  name="q2" value="Pizzicato" required >
                                <label for="Pizzicato">Pizzicato</label><br> 
                              <input type="radio"  name="q2" value="Staccato" required >
                                <label for="Staccato">Staccato</label><br>
                              <input type="radio"  name="q2" value="Legato" required >
                                <label for="Legato">Legato</label><br>
                          <?php 

                                   if ($question6){
                                     $test=$question6->q2;     
                                    $studio->counter($test,$q2);                          
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 3</h5>
                              <h6>3. What is Mozart’s full name ? </h6>
                              <input type="radio"  name="q3" value="Ludwig van Mozart" required >
                                <label for="Ludwig van Mozart">Ludwig van Mozart</label><br> 
                              <input type="radio"  name="q3" value="Johann Sebastian Mozart" required >
                                <label for="Johann Sebastian Mozart">Johann Sebastian Mozart</label><br>
                              <input type="radio"  name="q3" value="Wolfgang Amadeus Mozart" required >
                                <label for="Wolfgang Amadeus Mozart ">Wolfgang Amadeus Mozart</label><br>
                           <?php if($question6){
                                       $test=$question6->q3; 
                                      $studio->counter($test,$q3);
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 4</h5>
                              <h6>4. What is Symphony No. 9 in E minor by Antonín Dvořák more commonly known as ?</h6>
                              <input type="radio"  name="q4" value="Pastoral Symphony" required >
                                <label for="Pastoral Symphony">Pastoral Symphony</label><br> 
                              <input type="radio"  name="q4" value="New World Symphony" required >
                                <label for="New World Symphony">New World Symphony</label><br>
                              <input type="radio"  name="q4" value="Fantasia Sinfonica" required >
                                <label for="Fantasia Sinfonica">Fantasia Sinfonica</label><br>
                             <?php if($question6){
                                      $test=$question6->q4; 
                                    $studio->counter($test,$q4); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 5</h5>
                              <h6>5.Ludwig van Beethoven was born in 1770 in which German city ? </h6>
                              <input type="radio"  name="q5" value="Bonn" required >
                                <label for="Bonn">Bonn</label><br> 
                              <input type="radio"  name="q5" value="Berlin" required >
                                <label for="Berlin">Berlin</label><br>
                              <input type="radio"  name="q5" value="Dresden" required>
                                <label for="Dresden">Dresden</label><br>
                            <?php if($question6){
                                       $test=$question6->q5; 
                                      $studio->counter($test,$q5);  
                               }

                          ?>
                         </div>
                         
                          <div class="form-group">
                              <h5> Question 6</h5>
                              <h6>6. Who composed the famous ‘Four Seasons’ ? </h6>
                              <input type="radio"  name="q6" value="Giuseppe Verdi" required >
                                <label for="Giuseppe Verdi">Giuseppe Verdi</label><br> 
                              <input type="radio"  name="q6" value="Antonio Vivaldi" required >
                                <label for="Antonio Vivaldi">Antonio Vivaldi</label><br>
                              <input type="radio"  name="q6" value="George Frideric Handel"required >
                                <label for="George Frideric Handel">George Frideric Handel</label><br>
                            <?php if($question6){
                                  $test=$question6->q6; 
                                 $studio->counter($test,$q6); 
                               }

                          ?>
                         </div>
                        
                          <div class="form-group">
                            <h5> Question 7</h5>
                              <h6>7.How many parts are there in an orchestra ?</h6>
                              <input type="radio"  name="q7" value="5" required >
                                <label for="5">5</label><br> 
                              <input type="radio"  name="q7" value="4" required>
                                <label for="4">4</label><br>
                              <input type="radio"  name="q7" value="6" required >
                                <label for="6">6</label><br>
                            <?php if($question6){
                                     $test=$question6->q7; 
                                    $studio->counter($test,$q7); 
                                    }                               
                                

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 8</h5>
                              <h6>8.which century the orchestra was invented ? </h6>
                              <input type="radio"  name="q8" value="18" required >
                                <label for="18">18</label><br> 
                              <input type="radio"  name="q8" value="19" required >
                                <label for="19">19</label><br>
                              <input type="radio"  name="q8" value="17" required >
                                <label for="17">17</label><br>
                           <?php if($question6){
                                  $test=$question6->q8; 
                                 $studio->counter($test,$q8); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 9</h5>
                              <h6>9.The composers Mozart, Haydn, Schubert and Strauss were all born in which country ?
                               </h6>
                              <input type="radio"  name="q9" value="Austria" required >
                                <label for="Austria">Austria</label><br> 
                              <input type="radio"  name="q9" value="Germany" required >
                                <label for="Germany">Germany</label><br>
                              <input type="radio"  name="q9" value="Switzerland" required >
                                <label for="Switzerland">Switzerland</label><br>
                           <?php if($question6){
                                  $test=$question6->q9; 
                                 $studio->counter($test,$q9); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 10</h5>
                              <h6>10. How many lines are in a music pentagram ?  </h6>
                              <input type="radio"  name="q10" value="5"  required >
                                <label for="5">5</label><br> 
                              <input type="radio"  name="q10" value="4" required >
                                <label for="4">4</label><br>
                              <input type="radio"  name="q10" value="7" required >
                                <label for="7">7</label><br>
                             <?php if($question6){
                                 $test=$question6->q10; 
                                 $studio->counter($test,$q10); 
                               }

                          ?>
                         </div>
                        
                            
                            <?php if ($question6):?>
                                <a class="btn btn-success" href="music.php">Try Again</a>
                            <?php else:?>    
                               <input type="submit" name="score"   class="bnt btn-primary pull-right "  value="Ckeck Score >" >
                            <?php endif?>    
                     </form>
             </div>
             <div class="col-md-4">
                <br>
                <script>
                    document.getElementById("demo").innerHTML = "<?php 
                                    if($question6){
                                       if($studio->countIn==10){
                                          $studio->count=0;
                                         } 
                                           echo " <h2>Your score is  ". $studio->count ." /10</h2>";
                                           $studio->value="vmus";
                                           $studio->update($studio->count,$studio->value);
                                    }
                                    
                                ?>";
                  
                   </script>              
             </div>
        </div>
     </div>
     </div>
  
    
     <?php include("includes/footer.php"); ?>
         