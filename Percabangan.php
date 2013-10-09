<?php

	echo "<h1> PERCABANGAN </h1>";
	echo "<h4>Macam-macam percabangan<br>";
	echo " Percabangan IF<br>";
	echo " Percabangan IF - Else IF - Else<br>";
	echo " Percabangan Switch</h4><br><br>";


	echo " <h4>1. Percabangan IF</h4>";
	echo " digunakan untuk satu kondisi saja. Jika pernyataan benar (terpenuhi) maka akan dijalankan, jika salah (tidak terpenuhi) maka abaikan.<br>";
	echo "Diketahui buah = mangga<br>";
	echo "kondisi buah == mangga<br><br>";
	$buah=mangga;
 	if($buah==mangga)
		{
			echo "jadi, ini adalah buah mangga<br>";
		}
		else
		{
			echo "jadi, ini bukan buah mangga<br>";
		}
	

	echo " <h4>2. Percabangan IF - Else IF - Else </h4>";
	echo " Diketahui nilai = 3<br>";
	echo " Statement 1 nilai = 10 maka kamu ranking 1<br>";
	echo " Statement 2 nilai >=9 maka kamu ranking 2 <br>";
	echo " Statement 3 nilai >= 7 maka kamu ranking 3 <br>";
	echo " Statement 4 dibawah 7 maka gak dapet ranking <br><br>";
	$nilai=3;
	if($nilai==10)
	 	{
			echo "kamu ranking 1";
		}
		else if ($nilai >=9)
		{
			echo "kamu ranking 2";
		}
		else if ($nilai >=7)
		{
			echo "kamu ranking 3";
		}
		else
		{
			echo "kamu gak dapet ranking";
		}


	echo " <h4>3. Percabangan Switch </h4>";
	echo " Diketahui kendaraan = motor<br>";
	echo " Statement 1 kendaraan = motor maka ini adalah kendaraan roda 2<br>";
	echo " Statement 2 kendaraan = mobil maka ini adalah kendaraan roda 4<br>";
	echo " Statement 3 kendaraan = kereta maka ini adalah kendaraan roda bayaaaaak<br><br>";
	$kendaraan='motor';
	switch ($kendaraan)
	{
    		case 'motor':
		echo "ini adalah kendaraan roda 2";
		break;
	
    		case 'mobil':
		echo "ini adalah kendaraan roda 4";
		break;
	
    		case 'kereta':
        	echo "ini adalah kendaraan roda banyaaaaak.";
        	break;
	}
?>