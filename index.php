
<?php
session_start();
include("conn.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <style type="text/css">
      .footer{
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #512E5F;
   color: white;
   text-align: center;
   padding: 15px;
   text-decoration: none;
   color: #FFF;
}

 .footer a{
 	text-decoration: none;
   color: #FFF;
 }
 .hdr
 {
height: 80px;
width: 100%;
color: #fff;
background: #512E5F;


 }
 *{

 	margin: 0;
padding: 0;
 }
 table{
 	margin-left: 38%;
 	margin-top: 20%;
 }


</style>
</head>
<body>



	<header style="font-family:Sans-serif;letter-spacing: 3px;">Web4collage.com <header style="float: right;text-transform: uppercase;">Collage project</header></header>
	<div class="hdr">
		
<p style="float: right; margin-right: 10px; cursor: pointer;"> About us
 </p>

	</div>
<style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#512E5F;;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="login">
</form>

<p align="center"><a href="reg.php" style="text-decoration: none;" > Register User Click </a></p>
<footer>

 
  <div class="footer">&copy; 2018 Copyright:
    <a href="https://www.Web4collage.com">Developer by Husain</a>
  </div>
 

</footer>
</body>
</html>


<?php
if(isset($_POST['login'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 
 }
 else
 {
 
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 
 $query = mysqli_query($conn, "SELECT * FROM  userdata WHERE username='$user' AND  password='$pass'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){

 $_SESSION["usern"] =  $user;
 header('Location: wellcome.php');
 
 }
 else
 {
 echo "Username of Password is Invalid";
 }
 mysqli_close($conn); 
 }
}
 
?>