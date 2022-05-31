
<?php
if(isset($_POST['score'])){
     
     $q1= $_POST['q1'];
     $q2= $_POST['q2'];
     $q3= $_POST['q3'];
     $q4= $_POST['q4'];
     $q5= $_POST['q5'];
     $q6= $_POST['q6'];
     $q7= $_POST['q7'];
     $q8= $_POST['q8'];
     $q9= $_POST['q9'];
     $q10=$_POST['q10'];
     $question =  Students::find_by_test(1);
     $question1 = Students::find_by_test(2);
     $question2 = Students::find_by_test(3);
     $question3 = Students::find_by_test(4);
     $question4 = Students::find_by_test(5);
     $question5 = Students::find_by_test(6);
     $question6 = Students::find_by_test(7);

     $studio=new Students();
     
     
     
     }
     else {
             $question=[];
             $question1=[];
             $question2=[];
             $question3=[];
             $question4=[];
             $question5=[];
             $question6=[];

     }
?>
