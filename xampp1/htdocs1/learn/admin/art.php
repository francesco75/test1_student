
<?php include("includes/header.php"); ?>
<?php include("includes/score.php");?>


<body>
    <?php include("includes/jumbotron.php"); ?>
    <div class="back_art"><div class="overlay3"></div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4"><h2>  Test Art</h2><br></div> 
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
                        <h3> Basic Art Questions</h3><br>
                            <div id="demo"></div>
                     <form method="post"  action="" >
                              
                         <div class="form-group">
                          <h5> Question 1</h5>
                              <h6>1. Name the artist famed for painting the Sistine Chapel ceiling ? </h6>
                              <input type="radio"  name="q1" value="Bernini"  required  >
                                <label for="Bernini">Bernini</label><br> 
                              <input type="radio"  name="q1" value="Leonardo Da Vinci" required  >
                                <label for="Leonardo Da Vinci">Leonardo Da Vinci</label><br>
                              <input type="radio"  name="q1" value="Michelangelo" required >
                                <label for="Michelangelo">Michelangelo</label><br> 
                              <?php 
                                    
                                    if ($question5){
                                    $test=$question5->q1;    
                                    $studio->counter($test,$q1);
                                }
                              ?>
                        </div>
                        
                         <div class="form-group">
                              <h5> Question 2</h5>
                              <h6>2. The Mona Lisa by Leonardo da Vinci is on display in which Paris museum? </h6>
                              <input type="radio"  name="q2" value="Petit Palais" required >
                                <label for="Petit Palais">Petit Palais</label><br> 
                              <input type="radio"  name="q2" value="Louvre" required >
                                <label for="Louvre">Louvre</label><br>
                              <input type="radio"  name="q2" value="Musee D'Orsay" required >
                                <label for="Musee D'Orsay">Musee D'Orsay</label><br>
                          <?php 

                                   if ($question5){
                                     $test=$question5->q2;     
                                    $studio->counter($test,$q2);                          
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 3</h5>
                              <h6>3. Which artist painted the Poppy Field in 1873 ? </h6>
                              <input type="radio"  name="q3" value="Claude Monet" required >
                                <label for="Claude Monet">Claude Monet</label><br> 
                              <input type="radio"  name="q3" value="Édouard Manet" required >
                                <label for="Édouard Manet">Édouard Manet</label><br>
                              <input type="radio"  name="q3" value="Paul Cézanne " required >
                                <label for="Paul Cézanne ">Paul Cézanne </label><br>
                           <?php if($question5){
                                       $test=$question5->q3; 
                                      $studio->counter($test,$q3);
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 4</h5>
                              <h6>4. Which two cities provide the setting for Charles Dickens’ ‘A Tale of Two Cities’ ?</h6>
                              <input type="radio"  name="q4" value="Amsterdam and London" required >
                                <label for="Amsterdam and London">Amsterdam and London</label><br> 
                              <input type="radio"  name="q4" value="London and Paris" required >
                                <label for="London and Paris">London and Paris</label><br>
                              <input type="radio"  name="q4" value="London and Berlin" required >
                                <label for="London and Berlin">London and Berlin</label><br>
                             <?php if($question5){
                                      $test=$question5->q4; 
                                    $studio->counter($test,$q4); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 5</h5>
                              <h6>5.The Creation of Adam is one of nine scenes featured on the ceiling of which Rome landmark ? </h6>
                              <input type="radio"  name="q5" value="The Sistine Chapel" required >
                                <label for="The Sistine Chapel">The Sistine Chapel</label><br> 
                              <input type="radio"  name="q5" value=" Saint Peter's Basilica" required >
                                <label for=" Saint Peter's Basilica"> Saint Peter's Basilica</label><br>
                              <input type="radio"  name="q5" value="Saint Paul Basilica" required>
                                <label for="Saint Paul Basilica">Saint Paul Basilica</label><br>
                            <?php if($question5){
                                       $test=$question5->q5; 
                                      $studio->counter($test,$q5);  
                               }

                          ?>
                         </div>
                         
                          <div class="form-group">
                              <h5> Question 6</h5>
                              <h6>6. Who created the famous sculpture 'The Thinker'? </h6>
                              <input type="radio"  name="q6" value="Constantin Brancusi" required >
                                <label for="Constantin Brancusi">Constantin Brancusi</label><br> 
                              <input type="radio"  name="q6" value="Auguste Rodin" required >
                                <label for="Auguste Rodin">Auguste Rodin</label><br>
                              <input type="radio"  name="q6" value="Henry Moore"required >
                                <label for="Henry Moore">Henry Moore</label><br>
                            <?php if($question5){
                                  $test=$question5->q6; 
                                 $studio->counter($test,$q6); 
                               }

                          ?>
                         </div>
                        
                          <div class="form-group">
                            <h5> Question 7</h5>
                              <h6>7.In which century did Leonardo da Vinci paint The Last Supper ?</h6>
                              <input type="radio"  name="q7" value="13" required >
                                <label for="13">13</label><br> 
                              <input type="radio"  name="q7" value="14" required>
                                <label for="14">14</label><br>
                              <input type="radio"  name="q7" value="15" required >
                                <label for="15">15</label><br>
                            <?php if($question5){
                                     $test=$question5->q7; 
                                    $studio->counter($test,$q7); 
                                    }                               
                                

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 8</h5>
                              <h6>8.How many words long is Pablo Picasso’s full name? </h6>
                              <input type="radio"  name="q8" value="30" required >
                                <label for="30">30</label><br> 
                              <input type="radio"  name="q8" value="20" required >
                                <label for="20">20</label><br>
                              <input type="radio"  name="q8" value="23" required >
                                <label for="23">23</label><br>
                           <?php if($question5){
                                  $test=$question5->q8; 
                                 $studio->counter($test,$q8); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 9</h5>
                              <h6>9.In which city would you find The Van Gogh Museum ?
                               </h6>
                              <input type="radio"  name="q9" value="Berlin" required >
                                <label for="Berlin">Berlin</label><br> 
                              <input type="radio"  name="q9" value="Amsterdam" required >
                                <label for="Amsterdam">Amsterdam</label><br>
                              <input type="radio"  name="q9" value="Paris" required >
                                <label for="Paris">Paris</label><br>
                           <?php if($question5){
                                  $test=$question5->q9; 
                                 $studio->counter($test,$q9); 
                               }

                          ?>
                         </div>
                         
                         <div class="form-group">
                              <h5> Question 10</h5>
                              <h6>10. What year was Pablo Picasso born ?  </h6>
                              <input type="radio"  name="q10" value="1885"  required >
                                <label for="1885">1885</label><br> 
                              <input type="radio"  name="q10" value="1884" required >
                                <label for="1884">1884</label><br>
                              <input type="radio"  name="q10" value="1881" required >
                                <label for="1881">1881</label><br>
                             <?php if($question5){
                                 $test=$question5->q10; 
                                 $studio->counter($test,$q10); 
                               }

                          ?>
                         </div>
                        
                            
                            <?php if ($question5):?>
                                <a class="btn btn-success" href="art.php">Try Again</a>
                            <?php else:?>    
                               <input type="submit" name="score"   class="bnt btn-primary pull-right "  value="Ckeck Score >" >
                            <?php endif?>    
                     </form>
             </div>
             <div class="col-md-4">
                <br>
                <script>
                    document.getElementById("demo").innerHTML = "<?php 
                                    if($question5){
                                       if($studio->countIn==10){
                                          $studio->count=0;
                                         } 
                                           echo " <h2>Your score is  ". $studio->count ." /10</h2>";
                                           $studio->value="vart";
                                           $studio->update($studio->count,$studio->value);
                                    }
                                    
                                ?>";
                  
                   </script>              
             </div>
        </div>
     </div>
     </div>
  
    
     <?php include("includes/footer.php"); ?>
         