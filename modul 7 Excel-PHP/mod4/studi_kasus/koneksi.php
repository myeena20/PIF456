<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'webku';

$cnn = mysql_connect($host, $user, $pass);
if (!$cnn) {
        exit('Koneksi Gagal');
}
$db = mysql_select_db($db);
if(!$db) {
        exit('Gagal memilih Database');
}

?>