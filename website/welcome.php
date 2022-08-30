
<section class="jod">
<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
	}
}
?>
<div class="jumbotron">
	<center>
		<h1 class="welcome-title">Welcome</h1>
	</center>
	<div class="details center-block d-block ms-auto">
	<h1 class="welcome-details">First Name: <?php echo  $fname.""?></h1>
		<h1 class="welcome-details">Last Name:<?php echo  $lname.""?></h1>
		<h1 class="welcome-details">Email: <?php echo  $email.""?></h1>
	</div>
</div>
</section>