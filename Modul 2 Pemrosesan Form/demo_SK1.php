<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seleksi Preselecting</title>
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Mata Kuliah
<input type="radio" name="mk" value="Basis Data"/>Basis Data
<input type="radio" name="mk" value="Pemrograman Web" checked/>Pemrograman Web <br/>
<input type="submit" value="ok"/>
</form>
<?php
if(isset($_POST['mk'])) {
echo $_POST['mk'];
}
?>

</body>
</html>