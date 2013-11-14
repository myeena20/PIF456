<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>TUGAS PRAKTIKUM(MODUL 5) </title>

</head>

<body>

	<h1>PENGURUTAN DATA</h1>
 
<table border="1" width="600px">     
                   
<?php
	require "koneksi.php";
    $query1="select * from mahasiswa order by nim ";
    $urut='asc';
    $urutbaru='asc';
	
    if(isset($_GET['orderby']))
		{
            $orderby=$_GET['orderby'];
            $urut=$_GET['urut'];
        
            $query1="SELECT * FROM mahasiswa order by $orderby $urut ";
                if($urut=='asc')
				{
                    $urutbaru='desc';
                
                }
				else
				{
                     $urutbaru='asc';
                }        
        }
?>

    <th>
        <td><a href='tugas_prak.php?orderby=nim&urut=<?=$urutbaru;?>'>Nim</a></td>
        <td><a href='tugas_prak.php?orderby=nama&urut=<?=$urutbaru;?>'>Nama</a></td>
        <td><a href='tugas_prak.php?orderby=alamat&urut=<?=$urutbaru;?>'>Alamat</a></td>
    </th>
                                
<?php
	$result=mysql_query($query1) or die(mysql_error());
    $no=1;
	
    while($rows=mysql_fetch_object($result))
		{
?>
            <tr>
                <td><?php echo $no        
				?></td>
                <td><?php                echo $rows -> nim;?></td>
                <td><?php                echo $rows -> nama;?></td>
                <td><?php                echo $rows -> alamat;?></td>
            </tr>
			
<?php
    $no++;
        }
?>
</table>  



</body>
</html>