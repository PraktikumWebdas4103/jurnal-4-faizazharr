<form method="POST" action="proses.php">
	<H1>REGISTER</H1>
	USERNAME <input type="text" name="id"><br>
	PASSWORD <input type="text" name="pw"><br>
	<input type="submit" name="login" value="login">
</form>

<?php  
if (isset($_POST['login'])) {
$id =$_POST['id'];
$pw =$_POST['pw'];
$us = array('faiz');
$po = array('fz');

	if (in_array($us, $id) && in_array($po, $pw)) {
	exec('proses.php');
	}else{
		echo "password atau username anda salah silahkan ketik lagi";
	}
}
?>
