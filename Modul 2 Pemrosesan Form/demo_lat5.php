<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Checkbox</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Jenis Kelamin
    <input type="checkbox" name="hobby[]" value="Membaca" />Membaca
    
     <input type="checkbox" name="hobby[]" value="Olahraga"/>Olahraga
     
     <input type="checkbox" name="hobby[]" value="Menyanyi" /> Menyanyi <br />
     
     <input type="submit" value="ok"/>
     </form>
     
    <?php
	//ekstraksi nilai
	if (isset ($_POST['hobby']))
	{
		foreach ($_POST['hobby'] as $key => $val)
		{
			echo $key . ' -> ' .$val . '<br />';
		}
	}
?> 
</body>
</html>