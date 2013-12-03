<!DOCTYPE html>
<html>
  <head>
    <title>BERANDA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
     <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
	
  </div>


  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="#">Menu 1</a></li>
      <li><a href="#">Menu 2</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MODUL 4 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="mod4/studi_kasus/index.php">Studi Kasus</a></li>
          <li><a href="mod4/tugas/login.php">Login</a></li>
          <li><a href="mod4/tugas/index.php">Tugas Praktikum</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MODUL 5 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="mod5/studi_kasus.php">Studi Kasus</a></li>
          <li><a href="mod5/tugas_prak.php">Tugas Praktikum</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown"><i class="icon-user icon-white"></i>        
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Halimahtus Mukminna <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Profile</a></li>
          <li><a href="#">Setting</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->

</nav>

    <h1>Selamat Datang. ^_^</h1>
	<?php
 //menggunakan class phpExcelReader
 include "excel_reader2.php";
 include "koneksi.php";
  
//membaca file excel yang diupload
 $data = new Spreadsheet_Excel_Reader($_FILES['input']['tmp_name']);
 //membaca jumlah baris dari data excel
 $baris = $data->rowcount($sheet_index=0);
 
//nilai awal counter jumlah data yang sukses dan yang gagal diimport
 $sukses = 0;
 $gagal = 0;
 
//import data excel dari baris kedua, karena baris pertama adalah nama kolom
 for ($i=2; $i<=$baris; $i++) {
 //membaca data nip (kolom ke-1)
 $nim = $data->val($i,1);
 //membaca data nama depan (kolom ke-2)
 $nama = $data->val($i,2);
 //membaca data nama belakang (kolom ke-3)
 $alamat=$data->val($i,3);
 
//setelah data dibaca, sisipkan ke dalam tabel pegawai
 $query = "INSERT INTO mahasiswa values ('$nim','$nama','$alamat')";
 $hasil = mysql_query($query);
 
//menambah counter jika berhasil atau gagal

}
 if($hasil){ $sukses++;}
 else{ $gagal++;
 echo 'Pemasukan data gagal nim ' .$nim. ' sudah digunakan !' .'<br>'; 
 }
 //tampilkan report hasil import
 echo "<h3> Proses Import Data Mahasiswa</h3>";
 echo "<p>Jumlah data berhasil diimport : ".$sukses."<br>";
 echo "Jumlah data gagal diimport : ".$gagal."<p>";

 
?>
</div>
	<table class="table table-bordered">
		<tr class="info">
        	<td>NIM</th>
            <td>Nama</th>
            <td>Alamat</th>
        </tr>
        	<?php
				$sql= mysql_query("select * from mahasiswa ");
				while ($isi= mysql_fetch_array($sql)){
			?>
        <tr>
			<td><?php echo $isi['nim']; ?> </td>
            <td><?php echo $isi['nama']; ?> </td>
            <td><?php echo $isi['alamat']; ?> </td>
         </tr>
		<?php
			}
		?>
	</table>
	<a href="index_2.php" style="font-size:18px" class="label label-info" >Download via server 1</a>
    <a href="download2.php" style="font-size:18px" class="label label-info" >Download via server 2</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap-transition.js"></script>
    <script src="dist/js/bootstrap-dropdown.js"></script>
    <script src="dist/js/bootstrap-collapse.js"></script>
    <script src="dist/js/bootstrap-button.js"></script>
    <script src="dist/js/bootstrap-carousel.js"></script>
    <script src="dist/js/bootstrap-modal.js"></script>
    <script src="dist/js/bootstrap-popover.js"></script>
    <script src="dist/js/bootstrap-scrollspy.js"></script>
    <script src="dist/js/bootstrap-tab.js"></script>
    <script src="dist/js/bootstrap-tooltip.js"></script>
    <script src="dist/js/bootstrap-typeahead.js"></script>
  </body>
</html>
