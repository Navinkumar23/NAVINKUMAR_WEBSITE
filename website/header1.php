

<?php
include_once('link.php');
session_start();
$email = $_SESSION['email'];
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Registration Login</a>
		</div>
		<div class="dropdown navbar-right" id="right">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <?php echo $email;?>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="index.php">Logout</a></li>
  </ul>
</div>
	
	</div>
</nav>