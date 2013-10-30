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

		echo " <a href='logout.php'> Logout </a></fieldset>";
}

else 
{
		echo " Nama atau Password salah !!!! <br /> ";
		echo " <a href='login.php'> Coba Lagi </a>";
}
}
else {

?>

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
		<titleTUGAS MODUL 4</title>
</head>

<body>

<div class ="inner">
		<form action ="" method = "post">
		<table border=0 cell padding=5>
        <tr>
			<td colspan="2" bgcolor=" #E40D4E"><div align="center" class="style1">LOGIN FORM</div></td>
		</tr>
        <tr>
        	<td>Nama</td>
            <td><input type="text" name="nama"/> </td>
         </tr>
         <tr>
         	<td>Password</td>
             <td><input type="password" name="pass"/> </td>
          </tr>
          <tr>
          	<td></td>
            <td> <input type="submit" value="LOGIN"/> </td>
            </tr>
           
        </table>
        </form>
        </div>

</body>
</html>
<?php
}
?>