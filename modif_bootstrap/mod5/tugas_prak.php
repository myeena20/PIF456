<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="../dist/css/bootstrap.css" rel="stylesheet">
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    		
		<title>TUGAS PRAKTIKUM (MODUL 5) </title>

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
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MODUL 4<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="../mod4/studi_kasus/index.php">Studi Kasus</a></li>
          <li><a href="../mod4/tugas/login.php">Login</a></li>
          <li><a href="../mod4/tugas/index.php">Tugas Praktikum</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">MODUL 5 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="studi_kasus.php">Studi Kasus</a></li>
          <li><a href="tugas_prak.php">Tugas Praktikum</a></li>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/jquery.js"></script>
    <script src="../dist/js/bootstrap-dropdown.js"></script>
    <script src="../dist/js/bootstrap-transition.js"></script>
    <script src="../dist/js/bootstrap-collapse.js"></script>
    <script src="../dist/js/bootstrap-button.js"></script>
    <script src="../dist/js/bootstrap-carousel.js"></script>
    <script src="../dist/js/bootstrap-modal.js"></script>
    <script src="../dist/js/bootstrap-popover.js"></script>
    <script src="../dist/js/bootstrap-scrollspy.js"></script>
    <script src="../dist/js/bootstrap-tab.js"></script>
    <script src="../dist/js/bootstrap-tooltip.js"></script>
    <script src="../dist/js/bootstrap-typeahead.js"></script>

                    
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
<div class="tabel">
<div style="padding:5px;">

</div>
<div class="container">
<div class="row-fluid">
<h2 class="heading"><span class="glyphicon glyphicon-arrow-down"><span class="glyphicon glyphicon-arrow-up"></span></span> PENGURUTAN DATA</h2>
<table align="center" class="table table-bordered">
<tr class="success">
    <th>
        <td><a href='tugas_prak.php?orderby=nim&urut=<?=$urutbaru;?>'><h3 class="heading"><button class="btn btn-large btn-primary" type="button"><span class="glyphicon glyphicon-arrow-down"><span class="glyphicon glyphicon-arrow-up"></span></span> NIM</h3></a></td>
        <td><a href='tugas_prak.php?orderby=nama&urut=<?=$urutbaru;?>'><h3 class="heading"><button class="btn btn-large btn-primary" type="button"><span class="glyphicon glyphicon-arrow-down"><span class="glyphicon glyphicon-arrow-up"></span></span>Nama</h3></a></td>
        <td><a href='tugas_prak.php?orderby=alamat&urut=<?=$urutbaru;?>'><h3 class="heading"><button class="btn btn-large btn-primary" type="button"><span class="glyphicon glyphicon-arrow-down"><span class="glyphicon glyphicon-arrow-up"></span></span>Alamat</h3></a></td>
    </th>
</tr>
                                
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
</div>
</div>
 

</body>
</html>