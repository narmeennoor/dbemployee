<?php
include('connection.php');


    $Employeeid  = $_POST['Employeeid'];
    $sql_empid_check = $conn->query("SELECT Employeeid FROM tblemployee WHERE Employeeid='$Employeeid'") ;     
    $empid_check = $sql_empid_check->num_rows;    
  
   if ($empid_check==0){
    echo 0;

   }
   else{
    echo 1;
   }
     // echo $empid_check;
     
      //  if($empid_check==0)
      //  {
        
      //   echo 0;
      //  }
      //  else
      //  {
      //   echo 1;
      //  }
       
    
  

?>