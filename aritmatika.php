	
<?php

	$tambah = 10 + 5 ;
	$kurang = 10-5;
	$kali = 10 * 5;
	$bagi = 10/5;
	$mod = 10%5;
	
	echo " <h1> OPERASI ARITMATIKA </h1><br>";
	echo " <h3> Operasi Aritmatika diantaranya: <br>";
	echo " 1. Penjumlahan 	(+) <br>";
	echo " 2. Pngurangan		(-) <br>";
	echo " 3. Perkalian		(*) <br>";
	echo " 4. Pembagian		(/) <br>";
	echo " 5. Modulus 		(%) <br>";
	echo " 6. Increment		(++) <br>";
	echo " 7. Decrement		(--) </h3><br> <br>";

	echo " <h4> Contoh penggunaan Operator Aritmatika </h4>";
	echo "Menampilkan Penjumlahan: 10  +  5 = $tambah <br>";
	echo "Menampilkan Pengurangan: 10  -  5 =  $kurang <br>" ;
	echo "Menampilkan Perkalian:   10  x  5 =  $kali <br> ";
	echo "Menampilkan Pembagian:   10  :  5 =  $bagi <br> ";
	echo "Menampilkan Modulus:     10  %  5 =  $mod <br><br>";

	echo"=========================================<br>";
	echo " CONTOH OPERATOR ARITMATIKA <br>";
	echo"=========================================<br>";
	
	$phi=3.14;
	$r=7;
	$t=14;
	$s=10;
	$volbola=(4/3)*$phi*$r*$r*$r;
	$volkerucut=(1/3)*$phi*$r*$r*$t;
	$volkubus=$s*$s*$s;

	echo"<br/>";
	echo"| Menghitung Volume Bola, Kerucut dan Kubus |";
	echo"<br/>";

	echo"=========================================";
	echo"<br/>";
	echo"Phi = 3.14";
	echo"<br/>";
	echo"Jari-jari = 7";
	echo"<br/>";
	echo"Maka Volume Bola = $volbola";
	echo"<br/>";
	echo"<br/>";
	echo"Phi = 3.14";
	echo"<br/>";
	echo"Jari-jari Kerucut = 7";
	echo"<br/>";
	echo"Tinggi Kerucut = 14";
	echo"<br/>";
	echo"Maka Volume Kerucut = $volkerucut";
	echo"<br/>";
	echo"<br/>";
	echo"Sisi Kubus = 10";
	echo"<br/>";
	echo"Maka Volume Kubus = $volkubus";
	echo"<br/>";
	echo"<br/>";
	echo"=========================================";
?>