
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

   <title>Login Form Sederhana</title>
   <script type="text/javascript">
function check() // untuk mengecheck kosong atau tidaknya masukan username dan password
{
    if(form1.user.value == "")
    {
        alert('Masukkan User Name');
        document.form1.user.focus();
        return false;
    }
    else if(form1.pass.value=="")
    {   
        alert('Masukkan Password');
        document.form1.pass.focus();
        return false;
    }   
return true;
}


function Huruf(evt) // untuk mengecheck penggunaan harus huruf
{
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) 
	{
        alert('Masukkan User Name dan Password Harus Berupa Huruf ');
        return false;
    }
    return true;
}
</script>

<style type="text/css">
#apDiv1 {
    position:absolute;
    width:373px;
    height:330px;
    z-index:1;
    left: 441px;
    top: 62px;
    background-color: #F70819;
    border: 2px solid Blue;
}
#apDiv3 {
    position:absolute;
    width:80px;
    height:25px;
    z-index:2;
    left: 289px;
    top: 274px;
}
.style3 {
    font-size: 10px;
    font-weight: bold;
}
#apDiv2 {
    position:absolute;
    width:412px;
    height:115px;
    z-index:2;
    top: 0px;
    left: 2px;
}
#header{
    width:373px;
    height:98px;
    background-image: url(headerlogin.JPG);
}
#footer{
    width:373px;
    height:40px;
    background-image: url(footer.JPG);
}
body {
    background-color: #F5F0F1;
}
#apDiv4 {
    position:absolute;
    width:409px;
    height:221px;
    z-index:2;
    left: 426px;
    top: 411px;
}
</style>

</head>

<body onLoad="document.form1.user.focus();">
<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onSubmit="return check(this)">
<div id="apDiv1">
  <div id="header">
  <br>
  </div>
  <div>
    <div align="center"><strong><br>User Name :</strong>   
    <br>
    <input type="text" name="user" size="35" value="" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    <strong>Password : </strong> 
    <br>
    <input type="password" name="pass" size="35" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    </div>
  </div>
  <br>
    <div id="apDiv3">
     <input type="submit" name="submit" value=" L O G I N " >
    </div>
  </div>
</form>
<div id="apDiv4">
<?php
// untuk melakukan pengecheckkan apakah isi dari inputan user dan password berupa string 
// dan apakah sudah benar atau tidak
if(is_string($_POST['user']) AND ($_POST['pass']))
{   
    if (($_POST['user']=='halimahtus')AND($_POST['pass']=='halimahtus'))
    {
        echo 'SELAMAT DATANG, ANDA BERHASIL LOGIN : ';
        echo '<br>Hai, ' . $_POST['user'];
    }
    else
    {
        echo "<script>alert ('Username atau Password Salah, Silahkan Mencoba Kembali...!!');</script>";
    }
   
}

?>
</div>
</body>
</html>