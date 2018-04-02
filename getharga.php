<?php 
mysql_connect("localhost","root","");
mysql_select_db("finor");

//$abc = intval($_GET)
$KotaAsal = $_GET["asal"];
$KotaTujuan = $_GET["tujuan"];
$berat = $_GET['berat'];
$posisiAx = 0;
$posisiAy = 0;
$posisiTx = 0;
$posisiTy = 0;
$tarif = 3000;

//get posisi X from kota untuk kota asal
$sql = "SELECT posisiX FROM kota WHERE Kota = '$KotaAsal'";
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0){
	$fetch = mysql_fetch_array($result);
	$posisiAx = $fetch['posisiX'];
}
$sql = "SELECT posisiY FROM kota WHERE Kota = '$KotaAsal'";
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0){
	$fetch = mysql_fetch_array($result);
	$posisiAy = $fetch['posisiY'];
}
//get posisi X from kota untuk kota asal
$sql = "SELECT posisiX FROM kota WHERE Kota = '$KotaTujuan'";
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0){
	$fetch = mysql_fetch_array($result);
	$posisiTx = $fetch['posisiX'];
}
$sql = "SELECT posisiY FROM kota WHERE Kota = '$KotaTujuan'";
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0){
	$fetch = mysql_fetch_array($result);
	$posisiTy = $fetch['posisiY'];
}
//sqrt(pow(Ax-Tx) + pow(Ay-Ty))
echo sqrt(pow((intval($posisiAx)) - (intval($posisiTx)),2)) + (pow(((intval($posisiAy)) - (intval($posisiTy))),2)) * (intval($tarif)) * (intval($berat));

//echo (intval($TarifAsal)+intval($TarifTujuan))*intval($berat);//*intval($jumlah);