<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Check Box Presecting</title>

</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Pilih Musik Kesukaan Anda :
<input type="checkbox" name="musik1" value="Pop" checked/>Pop <br/>
<input type="checkbox" name="musik2" value="Rock"/>Rock <br/>
<input type="checkbox" name="musik3" value="Jazz"/>Jazz <br/>
<input type="checkbox" name="musik4" value="Klasik"/>Klasik <br/>
<input type="checkbox" name="musik5" value="Reggae"/>Reggae <br/>
<input type="submit" value="Submit"/>
</form>

<?php
if(isset($_POST['musik1'])) 
{
	echo $_POST['musik1'];
	echo "<br/>";
}

if(isset($_POST['musik2'])) 
{
	echo $_POST['musik2'];
	echo "<br/>";
}

if(isset($_POST['musik3'])) 
{
	echo $_POST['musik3'];
	echo "<br/>";
}
if(isset($_POST['musik4'])) 
{
	echo $_POST['musik4'];
	echo "<br/>";
}
if(isset($_POST['musik5'])) 
{
	echo $_POST['musik5'];
	echo "<br/>";
}
?>
</body>
</html>