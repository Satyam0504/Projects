<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>App Store | Download</title>
<link href="img/game.jpg" rel="shortcut icon" /> <link />
</head>
 <script>
 function welcome()
 {
	 var x=document.getElementById("u").value;
	 var y=document.getElementById("p").value;
	  if( x != "" && y != "" )
	return true;
	
	return false;	
 }
	var f=0;
	window.onload=f1;
	function f1()
	{
	if(f==0)
	{
		document.getElementById("m1").src="img/1.jpg";
		f=1;
	}
	else if(f==1)
	{
			document.getElementById("m1").src="img/2jpg";
			f=2;
	}
	else if(f==2)
	{
			document.getElementById("m1").src="img/3.jpg";
			f=3;
	}
	else if(f==3)
	{
			document.getElementById("m1").src="img/4.jpg";
			f=4;
	}
	else if(f==4)
	{
			document.getElementById("m1").src="img/5.jpg";
			f=5;
	}
	else if(f==5)
	{
			document.getElementById("m1").src="img/6jpg";
			f=6;
	}
	else if(f==6)
	{
			document.getElementById("m1").src="img/7.jpg";
			f=7;
	}
	else if(f==7)
	{
			document.getElementById("m1").src="img/8.jpg";
			f=8;
	}
	else if(f==8)
	{
			document.getElementById("m1").src="img/9.jpg";
			f=9;
	}
	else if(f==9)
	{
			document.getElementById("m1").src="img/10jpg";
			f=10;
	}
	else if(f==10)
	{
			document.getElementById("m1").src="img/11.jpg";
			f=11;
	}
	else if(f==11)
	{
			document.getElementById("m1").src="img/12.jpg";
			f=12;
	}
	else if(f==12)
	{
			document.getElementById("m1").src="img/13.jpg";
			f=13;
	}
	else if(f==13)
	{
			document.getElementById("m1").src="img/14jpg";
			f=14;
	}
	else if(f==14)
	{
			document.getElementById("m1").src="img/15.jpg";
			f=15;
	}
	else if(f==15)
	{
			document.getElementById("m1").src="img/16.jpg";
			f=16;
	}
	else if(f==16)
	{
			document.getElementById("m1").src="img/17.jpg";
			f=0;
	}
	
	setTimeout("f1()",2000);
}
</script>
<style>
.top{
	background:none;
	height:100px;
	width:100%;
	border-bottom:2px solid #000;
}
.topleft{
	background:none;
	height:100px;
	width:40%;
	float:left;
}
.logo{
	background-image:url(../project/img/logo.jpg);
	background-repeat:no-repeat;
	background-size:100% 100%;
	width:60%;
	height:40px;
	margin:25px 0px 0px 120px;
}
.topright{
	background:none;
	height:100px;
	width:40%;
	float:right;
}
.toprightpan{
	background:none;
	height:90px;
	width:40%;
	float:right;
	margin: 5px 5px 5px 20%;
}
.button{
	background:#fff;
	width:25%;
	border:2px #000 solid;
	height:28px;
	margin:3px 0px 80px 120px;
	cursor:pointer;
	transition:all 0.2s ease-in-out;
	outline:none;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(5,0,0,0.19);
}
.button:hover{
	background:#000;
	color:#FFF;
}
.button:active{
	background:#F00;
}
.mid{
	background-color:none;
	width:100%;
	height:40px;
	margin:5px;
}
.midbutton{
    background:#CCC;
	width:60%;
	border:2px #000 solid;
	height:28px;
	cursor:pointer;
	transition:all 0.2s ease-in-out;
	outline:none;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(5,0,0,0.19);

}
.midbutton:hover{
	background-color:#FFF;
}
.midbutton:active{
	box-shadow:none;
}
.midimg{
	height:400px;
	width:98%;
	margin:10px 0px 0px 20px;
	float:left;
	background-color:#9F0;
    
}
.midmenu{
	background:#CCC;
	width:20%;
	height:450px;
	float:left;
	margin:0px 0px 0px 20px;
}
.midmenu1{
	background:#CCC;
	float:left;
	width:90%;
	height:200px;
	margin:10px 0px 0px 10px;
	border-bottom:2px solid #FFF;
}
.midmenu2{
	background:#CCC;
	float:left;
	width:90%;
	height:200px;
	margin:5px 0px 0px 10px;
}
.midpan{
	background-image:url('img/12.jpg'); color:#000;
	width:98%;
	margin:10px 0px 0px 15px;
	float:left;
	background-size:100% 100%;
}
.middubpan{
	background:#F00;
	height:120px;
	width:98%;
	float:left;
	margin:8px 0px 0px 15px;
}
.midpanbutton{
	background-color:#666;
	height:100px;
	width:80%;
	margin:5px 0px 0px 15px;
	float:left;
}
	.button0 {
    margin: 15px 0px 0px 5px; 
    width: 250px;
	height:150px;
    background-color: black; 
    
    color: white;
    padding: 10px 25px;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    font-size: 16px;
 }     
.button2:hover {
    background-color: white;
    color: black;
    
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(5,0,0,0.19);
}
.button3 {
    margin: 15px 0px 0px 5px; 
    width: 250px;
	height:150px;
    background-color: WHITE; 
    
    color: BLACK;
    padding: 10px 25px;
    text-align: center;
    display: inline-block;
    text-decoration: none;
    font-size: 16px;
 }     
.button4:hover {
    background-color: BLACK;
    color: WHITE;
    
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(5,0,0,0.19);
}

</style>

<body>
<!-- Header Start Here -->
<div class="top">
	<div class="topleft">
    	<div class="logo">
        </div>
    </div>
    <div class="topright">
    	<div class="toprightpan">
        <form action="login.php" method="post" onsubmit="return welcome()">
        <input type="text" placeholder="USERNAME" name="user" id="u" /><br />
        <input type="password" placeholder="PASSWORD" id="p" name="pass" /><br />
        <input type="checkbox" onmousedown="show()" onmouseup="hide()"  name="c1" />  Show Password </input>
        <script>
		function show(){
			document.getElementById("p").type = "text";
	     }
	    function hide(){
			document.getElementById("p").type = "password";	
	     }
		 </script>
	    <input type="submit" value="login" class="button" />
        </form>
        </div>
    </div>   
    </div>
<!-- Header Close Here -->

<!-- Mid Body Start Here -->
<div class="mid">
	<table cellspacing="4" width="100%">
    <tr align="center">
    <td> <input type="button" value="GAMES" class="midbutton"/></td>
    <td> <input type="button" value="BOOK" class="midbutton" /></td>
    <td> <input type="button" value="MOVIES" class="midbutton" /></td>
    <td> <input type="button" value="MUSIC" class="midbutton" /></td>
    </tr>
    </table>
</div>
<div class="midimg">
   <img src="img/1.jpg" height="400px" width="100%" id="m1" />
</div>
<div class="midpan">
<div class="midmenu">
    <div class="midmenu1">
    <h4 style=" margin-left:5px; font-family:Georgia, 'Times New Roman', Times, serif"> Upcoming Movies </h4>
     <marquee direction="up" scrollamount="2"><ul style="font:'MS Serif', 'New York', serif; font-size:15px; font-weight:100;">
    	<li > Udta Punjab </li>
        <li > Dishoom </li>
        <li> Conjuring 2 </li>
    </ul></marquee>
    </div>
    <div class="midmenu2">
 	<h4 style=" margin-left:5px; font-family:Georgia, 'Times New Roman', Times, serif"> Upcoming Games </h4>
    <marquee direction="up" scrollamount="2"><ul style="font:'MS Serif', 'New York', serif; font-size:15px; font-weight:100;">   
        <li> Far Cry 5 </li>
        <li> Batman new season </li>
        <li> Gta Theft Gadar </li>
        <li> Batman vs Superman </li>
     </ul></marquee>
    </div>
</div>
</div>

<div style="background-color:#CCC; height:225px; float:left; margin-left:10px; width:98%; margin-top:10px;">
<div style="width:285px; height:180px; background:black; margin-left:18px; margin-top:8px; padding:10px; float:left; color:white;">
	<center>
	<button class="button0 button2"> <font face="FORTE" > APP OF THE MONTH </font> </button> 
    </center>
</div>
<div style="width:285px; height:180px; background:white; margin-left:18px; margin-top:8px; padding:10px; float:left; color:black;">
	<center>
	<button class="button3 button4" onclick="self.close();window.open('signup.php')" > <font face="FORTE" > SIGN UP </font> </button> 
    </center>
</div>
<div style="width:285px; height:180px; background:black; margin-left:18px; margin-top:8px; padding:10px; float:left; color:white;">
	<center>
	<button class="button0 button2"> <font face="FORTE" > BEST MUSICS </font> </button> 
    </center>
</div>
<div style="width:285px; height:180px; background:white; margin-left:18px; margin-top:8px; padding:10px; float:left; color:black;">
	<center>
	<button class="button3 button4"> <font face="FORTE" > ABOUT US </font> </button> 
    </center>
</div>
</div>

<embed src="civil.mp4" width="98%" style="margin-left:8px; margin-top:10px;" height="500px">
</embed>

<!-- Mid Body Close Here -->

<!-- Footer Start Here -->


<!-- Footer Close Here -->
      
</body>
</html>