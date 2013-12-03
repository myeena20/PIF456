<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../dist/css/bootstrap.css" rel="stylesheet">
		
		<title>STUDI KASUS (MODUL 5) </title>

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
    
<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    $rec_limit = 5;                    

        if(! $conn )
            {
                die('Could not connect: ' . mysql_error());
            }
        
	mysql_select_db('webku');
	$sql = "SELECT count(nim) FROM mahasiswa ";
	$retval = mysql_query( $sql, $conn );
         if(! $retval )
			{
                die('Could not get data: ' . mysql_error());
			}
			
	$row = mysql_fetch_array($retval, MYSQL_NUM );
	$rec_count = $row[0];
    if( isset($_GET{'page'} ) )
		{
			$page = $_GET{'page'} + 1;
			$offset = $rec_limit * $page;
        }
    else
       {
			$page = 0;
			$offset = 0;
		}
		
	$left_rec = $rec_count - ($page * $rec_limit);
	
	$sql = "SELECT nim, nama, alamat ".
			"FROM mahasiswa ".
			"LIMIT $offset, $rec_limit";

	$retval = mysql_query( $sql, $conn );
	if(! $retval )
		{
			die('Could not get data: ' . mysql_error());
		}
?>
<!--<div class="tabel">
<div style="padding:5px;">
</div>-->

<div class="container">
	<div class="row-fluid">
		<h2 class="heading"> Kombinasi Limitasi Data dan Paging </h2>
		<div class="pagination pagination-centered">
		<table align="center" class="table table-bordered">
			<tr class="success">
				<th width=50>#</th>
				<th width=100>NIM</th>
				<th width=150>Nama</th>
				<th width=200>Alamat</th>
			</tr>
    
	
	
<?php
	$i=0;
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{ 
	$i++;
?>
	<tr>
		<td>
			<?php echo $i; ?>
		</td>
		<td>
			<?php echo $row['nim']; ?>
		</td>
		<td>
			<?php echo $row['nama']; ?>
		</td>
		<td>
			<?php echo $row['alamat']; ?>
		</td>
	</tr>
	
	
<?php
	}
?>


</table>
</div>
<?php

	if( $page > 0 )
		{
            $last = $page - 2;
            echo "<a href=\"?page=$last\">Last 5 Records</a> |";
            echo "<a href=\"?page=$page\">Next 5 Records</a>";
        }
     else if( $page == 0 )
        {
            echo "<a href=\"?page=$page\">Next 5 Records</a>";
        }
	else if( $left_rec < $rec_limit )
		{
            $last = $page - 2;
            echo "<a href=\"?page=$last\">Last 5 Records</a>";
        }
    mysql_close($conn);
?>
</div>
</div>
</div>
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
</body>
 </html>	 