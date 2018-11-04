<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
?> 


 <!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
</head>

<body>
<h2>student name</h2>

<?php
$i=0;
$sql = "SELECT rollnum, name FROM dip";
$result = $conn->query($sql);
while($db_row = mysqli_fetch_array($result)) {
?>

<form action="aftermark.php" method="post">

<input type="checkbox" name="studentslist[]" value="<?php echo $db_row["rollnum"]; ?>"><label><?php echo $db_row["name"]; ?><?php echo $db_row["rollnum"]; ?></label><br> 
<?php
$i++;
}
?>

<input type="date" name="bday">
<input type="submit" value="mark" />

</form>


</body>