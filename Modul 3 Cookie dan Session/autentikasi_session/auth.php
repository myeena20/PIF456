<?php
defined('_VALID') or die('not allowed');

session_start();
function init_login()
{
	//Simulasi data account nama dan password
	$nama = 'minna';
	$pass = 'minna';
	
	if(isset($_POST['nama']) && isset($_POST['pass']))
	{
		$n = trim($_POST['nama']);
		$p = trim($_POST['pass']);
		
		if(($n === $nama) && ($p ==$pass)) 
		{
			//jika sama, set cookie
			$_SESSION['nlogin']= $n;
			$_SESSION['time'] = time();
		
			
			//redireksi
?>
<script type = "text/javascript">
document.location.href="./";
</script>

<?php
		}
		else
		{ 
		echo "<script>alert'Nama/Password Tidak sesuai'); </script>";
		return false;
		}
	}
}

function validate()
{
	if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time']))
	{
		?>
		<style type="text/css">
		<!--
		.style1 {color: #FFFFFF}
		-->
		</style>
		
        
        
		<div class ="inner">
		<form action ="" method = "post">
		<table border=0 cell padding=5>
        <tr>
			<td colspan="2" bgcolor=" #E40D4E"><div align="center" class="style1">LOGIN FORM</div></td>
		</tr>
        <tr>
        	<td>Nama</td>
            <td><input type="text" name="nama"/> </td>
         </tr>
         <tr>
         	<td>Password</td>
             <td><input type="password" name="pass"/> </td>
          </tr>
          <tr>
          	<td></td>
            <td> <input type="submit" value="LOGIN"/> </td>
            </tr>
           
        </table>
        </form>
        </div>
        <?php
		exit;
	}
	
	if (isset($_GET['m']) && $_GET['m'] == 'logout')
	{
		//hapus cookie
	if(isset($_SESSION['nlogin']))
	{
        unset($_SESSION['nlogin']);
    }
    if(isset($_SESSION['time']))
	{
        unset($_SESSION['time']);
        }
		
		//rediksi halaman
	?>
	<script type ="text/javascript">
	document.location.href="./";
	</script>
    <?php
	}
}

?>