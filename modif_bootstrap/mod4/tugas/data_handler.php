<!DOCTYPE html>
<html>
<head>
	<title>TUGAS PRAKTIKUM (MODUL 4)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">
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
          <li><a href="../studi_kasus/index.php">Studi Kasus</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="index.php">Tugas Praktikum</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MODUL 5 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="../../mod5/studi_kasus.php">Studi Kasus</a></li>
          <li><a href="../../mod5/tugas_prak.php">Tugas Praktikum</a></li>
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
      <li class="dropdown">        
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../dist/js/jquery.js"</script>
    <script src="../../dist/js/bootstrap-dropdown.js"></script>
    <script src="../../dist/js/bootstrap-transition.js"></script>
    <script src="../../dist/js/bootstrap-collapse.js"></script>
    <script src="../../dist/js/bootstrap-button.js"></script>
    <script src="../../dist/js/bootstrap-carousel.js"></script>
    <script src="../../dist/js/bootstrap-modal.js"></script>
    <script src="../../dist/js/bootstrap-popover.js"></script>
    <script src="../../dist/js/bootstrap-scrollspy.js"></script>
    <script src="../../dist/js/bootstrap-tab.js"></script>
    <script src="../../dist/js/bootstrap-tooltip.js"></script>
    <script src="../../dist/js/bootstrap-typeahead.js"></script>

</body>
</html>

<?php
function data_handler($root) {
        if (isset($_GET['act']) && $_GET['act'] == 'add') {
                data_editor($root);
                return;
        }
        $res = mysql_query("SELECT count(*) AS total FROM " . MHS );
        if(mysql_num_rows($res)) {
                if(isset($_GET['act']) && $_GET['act'] != '') {
                        switch ($_GET['act']) {
                                case 'edit':
                                        if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
                                                data_editor($root, $_GET['id']);
                                        } else {
                                                show_admin_data($root);
                                        }
                                        break;
                                case 'view':
                                        if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
                                                data_detail($root, $_GET['id'], 1);
                                        } else {
                                                show_admin_data($root);
                                        }
                                        break;
                                case 'del':
                                        if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
                                                $id = $_GET['id'];
                                                $sql = "DELETE FROM mahasiswa WHERE nim='$id'";
                                                $res = mysql_query($sql);
                                                if ($res) {
                                                        
                                                        ?>

										<?php
                                                } else {
                                                        echo 'Gagal menghapus data';
                                                }
                                        } else {
                                                show_admin_data($root);
                                        }
										show_admin_data($root);
                                        break;
                                default:
                                        show_admin_data($root);
                                        break;
                        }
                } else {
                        show_admin_data($root);
                }
                @mysql_close(res);
        } else {
                echo 'Data Tidak ditemukan';
        }
}

function show_admin_data($root) { ?>
<?php
        $sql = 'SELECT nim, nama, alamat FROM mahasiswa';
        $res = mysql_query($sql);

        if($res) {
                $num = mysql_num_rows($res);
                if ($num) {
                        ?>
<div class="tabel">
<div style="padding:5px;">
</div>

<div class="container">
<div class="row-fluid">
<h2 class="heading"> Administrasi Data </h2>
<a href="<?php echo $root; ?>&amp;act=add">
<button class="btn btn-large btn-primary" type="button"><span class="glyphicon glyphicon-plus"></span> Tambah Data</button></a>
<table align="center" class="table table-bordered">
<tr class="success">
<th>#</th>
<th width=120>NIM</th>
<th width=200>Nama</th>
<th width=200>Alamat</th>
<th width=200>Menu</th>
</tr>
<?php
$i=1;
while($row = mysql_fetch_row($res)) {
$bg = (($i % 2) != 0) ? '' : 'even';
$id = $row[0]; ?>
<tr class="<?php echo $bg; ?>">
<td width="2%"><?php echo $i;?></td>
<td>
<a href="<?php echo $root;?>&amp;act=view&amp;id=<?php echo $id;?>" title="Lihat Data"><?php echo $id;?></a>
		</td>
				<td><?php echo $row[1];?></td>
				<td><?php echo $row[2];?></td>
				<td align="center">
|<a href ="<?php echo $root;?>&amp;act=edit&amp;id=<?php echo $id;?>"><button class="btn btn-large btn-primary" type="button"><span class="glyphicon glyphicon-edit"></span>Edit</button></a> |
<a href ="<?php echo $root;?>&amp;act=del&amp;id=<?php echo $id;?>" onclick="return konfirm('<? echo $id;?> ')"><button class="btn btn-large btn-primary" type="button"><span class="glyphicon glyphicon-trash"></span> Hapus</button></a> </td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
</div>
<?php
        } else {
                echo 'Belum ada data, isi <a href="' . $root.'&amp;act=add">di sini</a>';
        }
        mysql_close();
        }
}

function data_detail($root, $id) {
        $sql = "SELECT nim, nama, alamat FROM mahasiswa WHERE nim ='$id'";
        $res = mysql_query($sql);
        if($res) {
                if (mysql_num_rows($res)) { ?>
<div class="tabel">
<div class="container">
<div class="row-fluid">
<table align="center" class="table table-bordered">
<?php
$row = mysql_fetch_row($res); ?>
<tr>
<td>NIM</td>
<td><?php echo $row[0];?></td>
</tr>
<tr>
<td>Nama</td>
<td><?php echo $row[1];?></td>
</tr>
<tr>
<td>Alamat</td>
<td><?php echo $row[2];?></td>
</tr>
</table>
</div>
</div>
</div>
<?php
                } else {
                        echo 'Data Tidak Ditemukan';
                }
                mysql_close();
        }
}

function data_editor($root, $id = 0) {
        $view = true;
        if(isset($_POST['nim']) && $_POST['nim']) {
                if (!$id) {
                        $nim = $_POST['nim'];
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $res = mysql_query("INSERT INTO mahasiswa VALUES ('".$nim."', '" .$nama."', '" .$alamat."')");
                        if($res) { ?>
<script type="text/javascript">
document.location.href="<?php echo $root;?>";
</script>
<?php
                } else {
                        echo 'Gagal menambah data';
                }
                } else {
                        $nim = $_POST['nim'];
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $res = mysql_query("UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat' WHERE nim='$id'");
                        if ($res) { ?>
<script type="text/javascript">
document.location.href="<?php echo $root;?>";
</script>
<?php
                } else {
                        echo 'Gagal Modifikasi';
                }
                }
        }
        if ($view) {
                if ($id) {
                        $sql = "SELECT nim, nama, alamat FROM mahasiswa WHERE nim ='$id'";
                        $res = mysql_query($sql);
                        if ($res) {
                                if(mysql_num_rows($res)) {
                                        $row = mysql_fetch_row($res);
                                        $nim = $row[0];
                                        $nama = $row[1];
                                        $alamat = $row[2];
                                } else {
                                        show_admin_data();
                                        return;
                                }
                        }
                } else {
                        $nim = @$_POST['nim'];
                        $nama = @$_POST['nama'];
                        $alamat = @$_POST['alamat'];
                }
                ?>
<form action="" method="post">
<div class="container">
<div class="row-fluid">
<h2> <?php echo $id ? 'Edit' : 'Tambah';?> Data </h2>
<table align="center" class="table table-bordered">
<tr class="success">
<td width=100>NIM*</td>
<td><input type="text" name="nim" size=10 value="<?php echo $nim;?>"/></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" size=40 value="<?php echo $nama;?>"/></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" size=60 value="<?php echo $alamat;?>"/></td>
</tr>
<tr>
<td> </td>
<td> <input type="submit" class="btn btn-success" value="Submit"/> <input type="button" class="btn btn-success" value="cancel" onclick="history.go(-1)"/></td>
</tr>
</table>
<p> Ket: * Harus diisi</p>
</form> <br/>
<?php
        }
        return false;
        }

?>