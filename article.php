<p>article</p>



<form action="?page=article" method="post">
	<input type="text" name="nama">
	<input type="submit" name="kirim" value="simpan">
</form>

<?php 

if ($_POST['kirim']){

	$a = $_POST['nama'];
	echo $a;
}

 ?>