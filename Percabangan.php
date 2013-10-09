<?php

	$buah=mangga;
	$nilai=3;
	$kendaraan='motor';
	
	echo "<h1> PERCABANGAN </h1><br> <br>";
	echo "<h4>Macam-macam percabangan<br>";
	echo " Percabangan IF<br>";
	echo " Percabangan IF - Else IF - Else<br>";
	echo " Percabangan Switch</h4><br><br>";
	
	
	echo "<h3>1. Percabangan IF </h3><br>"
	echo "Diketahui buah = mangga<br>";
	echo "kondisi buah == mangga<br>";
	 if($buah==mangga)
		{
			echo "ini adalah buah mangga";
		}
		else
		{
			echo "ini bukan buah mangga";
		}
	
	
	
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
	
	
	
	
	switch ($kendaraan)
	{
    case 'motor':
		echo "ini adalah kendaraan roda 2";
		break;
	
    case 'mobil':
		echo "ini adalah kendaraan roda 4";
		break;
	
    case 'kereta':
        echo "ini adalah kendaraan roda banyaaaaak. hohoho";
        break;
	}
?>