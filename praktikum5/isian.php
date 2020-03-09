<?php
echo "<center> Nama : ".$_POST['nama']."</center> <br>";
echo "<center> Email : ".$_POST['email']."</center> <br>";
date_default_timezone_set ("Asia/Jakarta");
echo "<center> Waktu Login : ".date ("D, d F Y, g:i:s a")."</center>"; 
?>