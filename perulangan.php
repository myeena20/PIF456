
<?php

	echo "<h1> OPERATOR PERULANGAN </h1><br>";



	echo "<h3> 1. Pengulangan dengan For</h3>";
	echo "Pengecekannya dilakukan diawal dan menggunakan 3 buah parameter <br><br>";

	for ($a = 1; $a <= 10; $a++)
	{
		print ("Ini adalah baris ke-$a <br>");
	}



	echo "<h3> 2. Pengulangan dengan While</h3>";
	echo "Pengecekannya dilakukan diawal dan menggunakan 1 buah parameter sedangkan 2 parameter lain (inisialisasi dan modifier dimasukkan ke dalam baris program<br><br>";

	$i=0; 
	while ($i<=12)
	{ 
		echo "IT Programmer akan dicetak 12 kali <br>"; 
		$i++;
	} 


	echo "<h3> 3. Pengulangan dengan Do-While</h3><br>";
	echo "Pengecekannya dilakukan diakhir dan menggunakan 1 buah parameter sedangkan 2 parameter lain (inisialisasi dan modifier dimasukkan ke dalam baris program <br><br>";


	$i = 1;
	do 
	{
     		echo "Antrian ke-$i<br>";
     		$i++;
	}
	while ($i<=25);
?>


