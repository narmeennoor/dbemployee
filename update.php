<?php

include('connection.php');
//echo '123';
//echo $_POST['Employeeid']; 
// if(isset($_GET['Employeeid'])){
//     $id= $_GET['Employeeid'];
//     update_data($conn, $id);
//  }
 
// function update_data($conn, $id){
    $Employeeid = $_POST['Employeeid']; 
    $Employeename= $_POST['Employeename'];
    $Designation = $_POST['Designation'];
    $Salary = $_POST['Salary'];
    $query="UPDATE `tblemployee` SET `Employeeid`='.$Employeeid.',`Employeename`='".$Employeename."',`Designation`='".$Designation."',`Salary`=' $Salary' WHERE $Employeeid=Employeeid";
    // $exec= mysqli_query($conn,$query);

    if(mysqli_query($conn, $query)){
			echo 1;

			
		} else{
			echo 0;
			
		}
// }
?>