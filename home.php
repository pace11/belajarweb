<table border="1" cellspacing="0">
	<tr>
		<td>nama</td>
		<td>no.hp</td>
		<td>email</td>
	</tr>
<?php
		include("koneksi.php");
		$tampil = mysqli_query($koneksi,"SELECT * FROM tbl_anggota"); /*$koneksi yang ada di dalam kurung itu variabel yang ada di file koneksi.php*/
		/*parameter ada 2 $koneksi apa yang mau dikoneksikan, yang ke 2 itu perintah sqlnya*/
		// $data = mysqli_fetch_array($tampil); /*mengkonfert variabel tampil menjadi array*/
	
		while ($data = mysqli_fetch_array($tampil)){
			echo "<tr>";
			echo "<td>$data[nama_anggota]</td>";
			echo "<td>$data[no_hp]</td>";
			echo "<td>$data[email]</td>";
			echo "</tr>";
		}
	/*	variabel yang dianggil[array apa yang dipanggil]*/
	?>
</table>