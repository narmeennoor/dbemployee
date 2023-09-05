

		<?php

include('connection.php');

		// Taking all 4 values from the form data(input)
	$Employeename=mysqli_real_escape_string($conn, $_POST['name']);
	$Employeeid=mysqli_real_escape_string($conn, $_POST['id']);
	$Designation=mysqli_real_escape_string($conn, $_POST['designation']);
	$Salary=mysqli_real_escape_string($conn, $_POST['salary']);
	mysqli_query($conn,"INSERT INTO tblemployee (Employeename, Employeeid, Designation, Salary) VALUES ('".$Employeename."','" .$Employeeid."','" .$Designation. "','".$Salary.  "')");
		// $Employeeid = $_POST['Employeeid'];
		// $Employeename = $_POST['Employeename'];
		// $Designation = $_POST['Designation'];
		// $salary = $_POST['Salary'];
		
		
		
		// $sql = "INSERT INTO tblemployee VALUES (' ','$Employeename','$Employeeid',
		// 	'$Designation','$salary')";
		
		// if(mysqli_query($conn, $sql)){
		// 	echo 1;

			
		// } else{
		// 	echo 0;
			
		// }

		
		
		// // Close connection
		// mysqli_close($conn);
		?>


      

