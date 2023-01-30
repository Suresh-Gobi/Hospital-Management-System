<html>
<head>
<?php
$servername = "localhost";
$username = "username";
$password = "password";

$conn = new mysqli('localhost','root','','arogyahc');

if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}

$sql="INSERT INTO patient(p_id,p_name,p_address,age,dob,tele_no,email,height,weight)VALUES('$_POST[p_id]','$_POST[p_name]','$_POST[p_address]','$_POST[age]','$_POST[dob]','$_POST[tele_no]','$_POST[email]','$_POST[height]','$_POST[weight]')";
 if ($conn->query($sql) === TRUE){
	 print ("new record added successfully");
 } else {
	print ("error: ".$sql."<br>".$conn->error); 
 }

$conn->close();
?>
</body>
</html> 