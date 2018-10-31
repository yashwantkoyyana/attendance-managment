

<?php
if(isset($_POST['studentslist'])){
	//print_r($_POST['studentslist']);
	$str="";
if(!empty($_POST['studentslist'])){
	
	foreach($_POST['studentslist'] as $selected){
	echo $selected."</br>";
	$str=$selected.",".$str;
	}
	echo $str;
}
}
$pushstr=$str;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully to database";

	
	$date=$_POST["bday"];
$sql = "INSERT INTO dipattendance (date,presentrollnos) VALUES ('$date','$pushstr')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?> 


