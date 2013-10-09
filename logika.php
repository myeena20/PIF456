<?php
	
	$f = 8;
	$k = 5;

	echo "<h1> OPERASI LOGIKA </h1><br> <br>";
	echo "<h4>Macam-macam operator logika<br>";
	echo " Logika AND (&&) <br>";
	echo " Logika OR (||) <br>";
	echo " Logika XOR (Xor)<br>";
	echo " Logika NOT (!)</h4> <br><br>";

	echo "Diketahui : <br>";
	echo "f = 8<br>"; 
	echo "k = 5; <br><br>";
	
	echo "<h3>1. Logika AND </h3>";
	echo " if (f == 8 && k == 5) <br>";
	
	if($f == 8 && $k == 5)
	{echo"Data Benar<br><br>";} //jika kedua sama
		else
			{echo"Data Salah<br><br>";} //jika salah satu tak sama

	
	echo "<h3>2. Logika OR </h3>";
	echo " if (f == 8 || k == 9) <br>";

	if ($f == 8 || $k == 9)
	{echo"Data Benar<br><br>";} // Jika salah satu sama atau keduanya sama
		else
    			{echo"Data Salah <br><br>";} // Jika tidak ada yang sama

	
	echo "<h3>3. Logika XOR </h3>";
	echo " if (f == 8 Xor k == 6) <br>";

	if ($f == 8 Xor $k == 6)
	{echo"Data Benar<br><br>";} // Jika salah satu sama 
		else
    			{echo"Data Salah <br><br>";}  // Jika tidak ada yang sama atau data keduanya sama


	echo "<h3>4. Logika NOT </h3>";
	echo " if (!f == !k) <br>";

	if (!$f == !$k)
	{echo"Data Benar<br><br>";} // Jika Keduanya Tidak benar 
		else
    			{echo"Data Salah <br><br>";}  // Jika salah satu Benar




?>