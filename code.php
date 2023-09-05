<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "dbemployee";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// adding new data

	$empid=mysqli_real_escape_string($conn, $_POST['id']);
    $empname=mysqli_real_escape_string($conn, $_POST['name']);
	$empdes=mysqli_real_escape_string($conn, $_POST['designation']);
	$empsal=mysqli_real_escape_string($conn, $_POST['salary']);
	mysqli_query($conn,"INSERT INTO employee (empid, empname, empdes, empsal) VALUES ('".$empid."','" .$empname."','" .$empdes. "','".$empsal.  "')");


    //to get the data
    $query="SELECT * FROM employee";
$query_run=mysqli_query($conn,$query);
$result_array=[];
if(mysqli_num_rows($query_run)>0)
{
    foreach($query_run as $row)
    {
        array_push($result_array,$row);
    }
    header('Content-type:application/json');
    echo json_encode($result_array);
}
else{
    echo $return="<h5>
    no record found</h5>";
}
?>