<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css" type="text/css"/>
</head>

<body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../dist/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap-dropdown.js"></script>
    <script src="../../dist/js/bootstrap-transition.js"></script>
    <script src="../../dist/js/bootstrap-collapse.js"></script>
    <script src="../../dist/js/bootstrap-button.js"></script>
    <script src="../../dist/js/bootstrap-carousel.js"></script>
    <script src="../../dist/js/bootstrap-modal.js"></script>
    <script src="../../dist/js/bootstrap-popover.js"></script>
    <script src="../../dist/js/bootstrap-scrollspy.js"></script>
    <script src="../../dist/js/bootstrap-tab.js"></script>
    <script src="../../dist/js/bootstrap-tooltip.js"></script>
    <script src="../../dist/js/bootstrap-typeahead.js"></script>


<form action="" method="post">
<div class="form">
  <div class="username">
    <input type="text" placeholder="USERNAME" name="nama"/>
  </div>
  <div class="password">
    <input type="password" placeholder="PASSWORD" name="pass"/>
  </div>
  <div class="login">
  	<input type="submit" value="LOG IN"/> 
  </div>
</div>
</form>

</body>
</html>

<?php

session_start();

$nama = 'admin';
$pass = 'minna';

if (isset($_POST['nama'])) {

if (($_POST['nama'] == $nama) && ($_POST['pass'] == $pass)) 
{
		$_SESSION['nama'] = $_POST['nama'];
		$_SESSION['pass'] = $_POST['pass'];

		$user = $_SESSION['nama'];
		$pass = $_SESSION['pass'];


		header ("Location: index.php");

		echo "<a href='logout.php'> Logout </a></fieldset>";
}

else 
{
		echo "<script> alert (' User Name atau Password salah. Login Gagal !!!'); history.go(-1)</script>";
}
}
else {

?>

<?php
}
?>