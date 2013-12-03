<!DOCTYPE html>

<html>

<head>


 <script language="JavaScript">
    
    function konfirm(id) // konfirmasi untuk hapus data
    {
        tanya = confirm('Apakah anda yakin ingin menghapus data dengan NIM '+ id + '?');
        if (tanya == true)
            return true;
        else
            return false;
    }
 </script>
</head>
<title> Akses dan Manipulasi Data </title>
<style type="text/css">
.even {
        background: #ddd;
}
</style> </head>

<body>

		<?php
		ini_set('display_errors',1);

				require_once './koneksi.php';
				require_once './data_handler.php';

		define('MHS','mahasiswa');

		data_handler('?m=data');
		?>

<div class="container">
<div class="row-fluid">
<p>
<a href="login.php"><button class="btn btn-large btn-primary" type="button"><span class="glyphicon glyphicon-arrow-left"></span> Logout</button></a>
<table align="center" class="table table-bordered">
<tr class="success">
</tr>
</table>
</p>
</div>
</div>

</body>


</html>