
<?php
require_once('connection.php');
$fname = $lname = $gender = $email = $contact = $dob  = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$dob = $_POST['dob'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser (Firstname,Lastname,Gender,Email,Contact,Dob,Password) VALUES ('$fname','$lname','$gender','$email','$contact','$dob','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: index.php");
}
else
{
	echo "Error :".$sql;
}
?>