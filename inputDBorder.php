<?php 
session_start();
$email = $_POST['email'];
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$berat = $_POST['berat'];
$tarif = $_POST['tarif'];


if (isset($_POST['submit'])) {
		$connection = mysql_connect("localhost", "root", "");
		// mencegah MySQL injection
		$email = stripcslashes($email);
		$nama = stripcslashes($nama);
		$asal = stripcslashes($asal);
		$tujuan = stripcslashes($tujuan);
		$berat = stripcslashes($berat);
		$tarif = stripcslashes($tarif);

		$email = mysql_real_escape_string($email);
		$nama = mysql_real_escape_string($nama);
		$asal = mysql_real_escape_string($asal);
		$tujuan = mysql_real_escape_string($tujuan);
		$berat = mysql_real_escape_string($berat);
		$tarif = mysql_real_escape_string($tarif);

		$db = mysql_select_db("finor", $connection);
		$sql = "insert into `orderan`(`email`, `nama`, `kotaAsal`, `kotaTujuan`, `berat`, `tarif` ) VALUES ('$email','$nama','$asal', '$tujuan', '$berat', '$tarif')";
		$query = mysql_query($sql);
		if ($query){
			echo '<div class="alert alert-success">	
 					<strong>Success!</strong> Kembali <a href="inputorder.php" class="alert-link">Order</a>.
				</div>';
		}
		else
		{
			echo '<div class="alert alert-info">
 					<strong>Ooops!</strong> Kembali <a href="inputorder.php" class="alert-link">Order</a>.
				</div>';
		}
		//$rows = mysql_num_rows($query);
			
}
	# code...
?>