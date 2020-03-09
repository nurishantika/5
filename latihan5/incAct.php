<?php
echo "<br>";
if(empty($_POST['nama'])) {
header("Location: http://localhost/praktikum5/datakosong.php");
} elseif (empty($_POST['email'])) {
header("Location: http://localhost/praktikum5/datakosong.php");
} else {
include "isian.php";
}
?>