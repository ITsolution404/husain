<?php

$sername = 'localhost';
$suser = 'root';
$spas = '';
$sdb = 'husainit';
$conn = mysqli_connect($sername, $suser ,$spas, $sdb );
if($conn)
{

	echo "connected database";
}

else
{
	echo "not connection_timeout".mysqli_connect_error();
}
?>