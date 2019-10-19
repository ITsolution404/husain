
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
.lg a{

background:red;height: 20px; width: 50px; color: #fff; float: right; border-radius: 4px; text-decoration: none;
margin-right: 10px;
margin-top: -50px;
text-align: center;

}

h1
{

	margin-left: 14%;
	margin-top: 1%;
	font-size: 120px;
	text-shadow: 1px 8px 23px;
	text-shadow: 1px 8px 10px;
	text-shadow: 1px 8px 12px;
	text-shadow: 1px 8px 14px;
	text-shadow: 1px 8px 16px;
	text-shadow: 1px 8px 18px;
	text-shadow: 1px 8px 20px;
	text-shadow: 1px 8px 22px;
	text-shadow: 1px 8px 23px;
	text-shadow: 1px 8px 24px;
	text-shadow: 1px 8px 25px;
	text-shadow: 1px 8px 26px;
}
span{
	color:  #fff;
	animation-name: colors;
	animation-duration: 4s;
     animation-iteration-count: infinite;
}
	@keyframes colors{
0% {color: #0B0204;}
20% {color: #E90F40;}
40% {color: #0B0204;}
60% {color: #E90F40;}
80% {color: #0B0204;}
100% { color: #E90F40;}
	}
.main{

background-image: linear-gradient(to right,#DC0B3A,#0000,#0B0204);
box-shadow: 12px 10px 13px;
width: 690px;
justify-content: center;
margin-left: 20%;
}

	.line{
    width: 60px;
    height: 5px;
    margin-left: 17%;
    margin-top: 10%;
    border-radius: 50%;
    background-image: linear-gradient(to right,#DC0B3A,#0000,#0B0204);
    position: relative;
    -webkit-animation-name: example; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
    animation-name: example;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}
@-webkit-keyframes example {
    0%   { left:0px; top:0px;}
    25%  {left:710px; top:0px;}
    50%  {left:710px; top:170px; transform: rotate(90deg);text-shadow: 12px #DC0B3A;}
    75%  {left:0px; top:170px;transform: rotate(180deg);}
    100% {left:0px; top:0px;transform: rotate(90deg);}
}


</style>
</head>
<body>



	<header style="font-family:Sans-serif;letter-spacing: 3px;">Web4collage.com <header style="float: right;text-transform: uppercase;">Collage project</header></header>
	<div class="hdr">
		
<p style="float: right; margin-right: 10px; cursor: pointer;">Loged <?php
session_start();
echo 'User -'.$_SESSION["usern"];
?>
 </p>

	</div>
<p class="lg"><a href="index.php">logout</a></p>
	


<div class="line"></div>
<div class="main"><h1>Hu<span>sa</span>in</h1></div



<footer>

  
  <div class="footer">&copy; 2018 Copyright:
    <a href="https://www.Web4collage.com">Developer by Husain</a>
  </div>
 

</footer>
</body>
</html>