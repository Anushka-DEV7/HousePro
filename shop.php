<?php
session_start();
 if(isset($_SESSION['name']))
 {
 ?>
<html>
    <head>
        <title>Shop</title>
        <link rel="stylesheet" href="shop.css">
    </head>
    <body>
	<div class = "navbar">
	<center>
	<font style="color: black ; font-family:'Lucida Handwriting'; font-size: 35px;font-weight: 100; align: 'justify';  "> <b>Hello ,<?php echo $_SESSION['name']; ?> 
	 </b></font>
	 </center>
	<nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <br>
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		 <li><a href= "aboutus.php" class= "btn">About Us</a></li>
		 <li><a href= "sercatog.php" class= "btn"> Cataloug </a></li>
	  </ul>
	  <div>
	   <a href= "custsignup.php" class= "btnn"> Shop </a>
	   <a href = "logout.php" class = "btnn"><u style="color: white;height: 5px;">LOGOUT</u></a>
	  </div>
	</nav>
	</div>        
    <div class="div1">
      
        <span id="btn"><a href="aboutus.html">ADD TO CART</a></span>
       
    </div>
<p>
   <br><br><center><font style="font-size: 80px;font-family: Garamond;font-weight: 500;color:#493425;background-color: #cef694;"><u>OUR PRODUCTS</u></font></center>
</p>
   <div class="org">
        <div class="images">
            <div class="photo">
                <img src="img/medic.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
 <input id="textbox" type="text" value="119" readonly="readonly" size="3" id="text"/> <span id="textbox">QTY</span>  <SELECT id="textbox" NAME="QTY">
    <OPTION VALUE  = "1"> 1 </OPTION>
    <OPTION VALUE = "2"> 2 </OPTION >
 </SELECT>


   <a id="textbox" href="aboutus.html">ADD TO CART</a>
                </div>
            </pre>
            </div>
            <div class="photo">
                <img src="img/medic.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
 <input id="textbox" type="text" value="119" readonly="readonly" size="3" id="text"/> <span id="textbox">QTY</span>  <SELECT id="textbox" NAME="QTY">
    <OPTION VALUE  = "1"> 1 </OPTION>
    <OPTION VALUE = "2"> 2 </OPTION >
 </SELECT>


   <a id="textbox" href="aboutus.html">ADD TO CART</a>
                </div>
            </pre>
            </div>


            <div class="photo">
                <img src="img/medic.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
 <input id="textbox" type="text" value="119" readonly="readonly" size="3" id="text"/> <span id="textbox">QTY</span>  <SELECT id="textbox" NAME="QTY">
    <OPTION VALUE  = "1"> 1 </OPTION>
    <OPTION VALUE = "2"> 2 </OPTION >
 </SELECT>


   <a id="textbox" href="aboutus.html">ADD TO CART</a>
                </div>
            </pre>
            </div>
            <div class="photo">
                <img src="img/medic.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
 <input id="textbox" type="text" value="119" readonly="readonly" size="3" id="text"/> <span id="textbox">QTY</span>  <SELECT id="textbox" NAME="QTY">
    <OPTION VALUE  = "1"> 1 </OPTION>
    <OPTION VALUE = "2"> 2 </OPTION >
 </SELECT>


   <a id="textbox" href="aboutus.html">ADD TO CART</a>
                </div>
            </pre>
            </div>
            <div class="photo">
                <img src="img/medic.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
 <input id="textbox" type="text" value="119" readonly="readonly" size="3" id="text"/> <span id="textbox">QTY</span>  <SELECT id="textbox" NAME="QTY">
    <OPTION VALUE  = "1"> 1 </OPTION>
    <OPTION VALUE = "2"> 2 </OPTION >
 </SELECT>


   <a id="textbox" href="aboutus.html">ADD TO CART</a>
                </div>
            </pre>
            </div>
            <div class="photo">
                <img src="img/medic.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
 <input id="textbox" type="text" value="119" readonly="readonly" size="3" id="text"/> <span id="textbox">QTY</span>  <SELECT id="textbox" NAME="QTY">
    <OPTION VALUE  = "1"> 1 </OPTION>
    <OPTION VALUE = "2"> 2 </OPTION >
 </SELECT>


   <a id="textbox" href="aboutus.html">ADD TO CART</a>
                </div>
            </pre>
            </div>
            <div class="photo">
                <img src="img/medic.jpeg" alt="">
               <pre>
                <div id="stylebtn">
             
 <input id="textbox" type="text" value="119" readonly="readonly" size="3" id="text"/> <span id="textbox">QTY</span>  <SELECT id="textbox" NAME="QTY">
    <OPTION VALUE  = "1"> 1 </OPTION>
    <OPTION VALUE = "2"> 2 </OPTION >
 </SELECT>


   <a id="textbox" href="aboutus.html">ADD TO CART</a>
                </div>
            </pre>
            </div>
        </div>  
    </div>
    </body>
</html>
<?php
}
else
{
header("Location: custsignup.php");
exit();
}
?>