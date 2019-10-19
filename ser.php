<?php
session_start();

$sername = 'localhost';
$suser = 'root';
$spas = '';
$sdb = 'husainit';
$conn = mysqli_connect($sername, $suser ,$spas, $sdb );


$rname = $_POST['fname'];
$remail = $_POST['email'];
$rpass = $_POST['Password'];
$rmob = $_POST['mobile'];
$rdob= $_POST['dob'];

$query = "INSERT INTO `userdata` (`name`, `username`, `password`, `mobile`, `dob`) VALUES ( '$rname', '$remail', '$rpass', '$rmob ', '$rdob')";
$run = mysqli_query($conn, $query);
if ($run == TRUE) {
$_SESSION["fname"] = $remail;
header('Location: reg.php');
$alrt = $remail;
	# code...
}

?>				