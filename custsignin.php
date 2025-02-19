<html>
    <head>
        <title>Loginemp</title>
    
        <link rel="stylesheet" type="text/css" href="style2.css">
     
    </head>
	
    <body>
	<div class = "navbar">
	<nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		 <li><a href= "aboutus.php" class= "btn">About Us</a></li>
		 <li><a href= "sercatog2.php" class= "btn"> Lifestyle care Service  </a></li>
		  <li><a href= "adminlog.php" class= "btn"> Admin </a></li>
		 <li><a href= "jobview.php" class= "btn"> Join Us ! </a></li>
		
	  </ul>
	  <div>
	   
	  </div>
	</nav>
	<div>
	<div class = "wrapper">
        <font style="font-weight:bold;font-size:40px; color: MintCream;">
		<h1>SIGN UP</h1>
		</font>
	
		<form action = "custsigninform.php" method = "POST">
		
    <div class = "inpbox">
    <input type="text"  name="name" placeholder="Enter your Name"><br><br>
	</div>

    <div class = "inpbox">
    <input type="text"  name="email" placeholder=" Enter a valid email address" ><br><br>
	</div>
	
	<div class = "inpbox">
    <input type="password"  name="password" placeholder=" Enter your Password"><br><br>
	</div>
	
	<div class = "inpbox">
	<input type="text" name="phone" placeholder=" Enter your phone no.{eg +123456}"><br><br>
	</div>
	<input type="submit" class ="btn"> 
	
    <div class ="reglink">
     <p><a href = "custsignup.php"> Already have an Account ?</a></p>
	 <br>
	 <p><a href = "aboutus.php"> Explore More!</a></p>
	 </div>	
	 </div>	
	
	</form>
	</div>
	</font>
        
      
    </body>
</html>
