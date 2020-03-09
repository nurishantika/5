<?php
if(empty($_POST['nama'])) {
header("Location: http://localhost/praktikum5/datakosong2.php");
} elseif (empty($_POST['panggilan'])) {
header("Location: http://localhost/praktikum5/datakosong2.php");
} elseif (empty($_POST['alamat'])) {
header("Location: http://localhost/praktikum5/datakosong2.php");
} elseif (empty($_POST['tempat'])) {
header("Location: http://localhost/praktikum5/datakosong2.php");
} elseif (empty($_POST['tgl'])) {
header("Location: http://localhost/praktikum5/datakosong2.php");
} elseif (empty($_POST['nohp'])) {
header("Location: http://localhost/praktikum5/datakosong2.php");
} elseif (empty($_POST['hobby'])) {
header("Location: http://localhost/praktikum5/datakosong2.php");
} elseif (empty($_POST['cita'])) {
header("Location: http://localhost/praktikum5/datakosong2.php");
} else {
echo "<center> Nama : ".$_POST['nama']."</center> <br>";
echo "<center> Nama Panggilan : ".$_POST['panggilan']."</center> <br>";
echo "<center> Alamat : ".$_POST['alamat']."</center> <br>";
echo "<center> Tempat Lahir : ".$_POST['tempat']."</center> <br>";
echo "<center> Tanggal Lahir : ".$_POST['tgl']."</center> <br>";
echo "<center> No. Handphone : ".$_POST['nohp']."</center> <br>";
echo "<center> Hobby : ".$_POST['hobby']."</center> <br>";
echo "<center> Cita-cita : ".$_POST['cita']."</center> <br>";
}
?>