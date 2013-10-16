<html>
<head><title>STUDI KASUS 1</title></head>
<body>

<?php

$jam = date("H:i:s");
echo $jam;
greeting($jam);


echo "----------------------------------------<br/>";
echo " Halimahtus Mukminna 110533430507 <br/>";
echo "----------------------------------------<br/>";
echo " Fungsi Greeting yang menerima argumen integer jam (format 24 jam)<br/><br/>";
function greeting($j) 
{
echo "<br/>";

	if ($j > ("00:00:00") and $j < ("10:00:00")) 
	{
		echo "Selamat Pagi";
	}
	elseif ($j > ("10:00:01") and $j < ("14:00:00")) 
	{
		echo "Selamat Siang";
	}
	elseif ($j > ("14:00:01") and $j < ("17:00:00")) 
	{
		echo "Selamat Sore";
	}
	elseif ($j > ("17:00:01") and $j < ("23:59:59")) 
	{
		echo "Selamat Malam";
	}
	else 
	{
		echo "Salah";
	}
}

?>
</body>
</html>