<?php
include('connection.php');

//    $sql="SELECT * FROM 'tblEmployee'";
//    $result=mysqli_query($conn,$sql);
//    $num=mysqli_num_rows(($result));
//    echo $num;
   
    // $result_array=[];
    // $query="SELECT * FROM tblemployee WHERE empid='$empid' ";
    // $query_run=mysqli_query($conn,$query);
    // if(mysqli_num_rows($query_run)>0)
    // {
    //     foreach($query_run as $row)
    //     {
    //         array_push($result_array,$row);
    //     }
  
    //     header('Content-type:application/json');
    //     echo json_encode($result_array);

    // }
    // else{
    //     echo $return="
    //     no record found";
       
    // }

    if(isset($_POST['checking_edit']))
    {
        $Employeeid  = $_POST['Employeeid '];
        $result_array = [];
    
        $query = "SELECT * FROM  tblemployee WHERE Employeeid='$Employeeid' ";
        $query_run = mysqli_query($conn, $query);
    
        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
            {
                array_push($result_array, $row);
            }
            header('Content-type: application/json');
            echo json_encode($result_array);
        }
        else
        {
            echo $return = "No Record Found.!";
        }
     
    }
?>