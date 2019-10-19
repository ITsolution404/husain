<html>
<head>
	<title>Register</title>
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

background:red;height: 20px; width: 40px; color: #fff; float: right; border-radius: 4px; text-decoration: none;
margin-right: 10px;
margin-top: -50px;

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
.frm{

  
  margin-top: 10px;
  margin-left: 20px;

}

input[type =text] , input[type =password] ,input[type =submit] ,input[type =email],input[type =reset]
{

  padding: 4px;

  border-radius: 8px;
}
input[type =submit]
{
   
   border-radius: 8px;
  margin-left: 160px;
}
input[type =reset]
{
   
   border-radius: 8px;
  margin-left: 8px;
  margin-top: 2px;
}

.fm

{

  width: 340px;
  height: 340px;
  margin-left: 34%;
  margin-top: 6%;
  border-left: 1px solid #512E5F; 
  border-right: 1px solid #512E5F; 
}
.head {

 
  width: 100%;
  background:#512E5F; 
  height:40px;
}
</style>
</head>
<body>



	<header style="font-family:Sans-serif;letter-spacing: 3px;">Web4collage.com <header style="float: right;text-transform: uppercase;">Collage project</header></header>
	<div class="hdr"></div> 
		
<div class="fm">
  <div class="head"><p style="color: #fff" align="center"> : Create Accout Uer :</p></div>
    <form action="ser.php" method="POST" class="frm">
          <table>
          <tr><td> <label>
                Full Name<span >*</span>
              </label></td><td><input type="text" name="fname" required autocomplete="off" /></td></tr>  
          <tr><td>
                <label>
                Email Address<span>*</span>
              </label>
              </label></td><td><input type="text" name="email" required autocomplete="off" /></td></tr>  


              <tr><td>
                <label>
              Set A Password<span ">*</span>
            </label></td><td><input type="password" name="Password" required autocomplete="off"/></td></tr>  
            <tr><td>
                 <label>
              Mobile No<span >*</span>
            </label></td><td><input type="text" name="mobile" required autocomplete="off"/></td></tr> 

            <tr><td>
                 <label>
              Date of Birth<span>*</span>
            </label></td><td><input type="text"required name="dob" placeholder="YYYY-MM-DD" autocomplete="off"/></td></tr> 

            <tr><td colspan="2"><input type="submit" name="register" value="Register"> <input type="Reset" name="" value="Cancel"> </td></tr>
          </table>
          
             
              
            
        
            
            
           
         
          
  
          
          </form>

  <p align="center"><a href="index.php" style="text-decoration: none;" >Already created Click </a></p>
   <div class="head"><p style="color: #fff;margin-top: 52px;" align="center"></p></div>

        </div>
        <p style="color:#52BE80;margin-top:-60px; text-align: center;" ><?php
session_start();

echo "Resent A/C : ".  $_SESSION["fname"];

?></p>


<footer>

  
  <div class="footer">&copy; 2018 Copyright:
    <a href="https://www.Web4collage.com">Developer by Husain</a>
  </div>
 

</footer>
</body>
</html>