<?php
session_start();
 if(isset($_SESSION['name']))
?>
<html>
<head>
<title> service category page</title>
<link rel="stylesheet" href = "STY3.CSS">
<link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href = "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
      
	  <nav class = "navv">
<img src="img/HousePrologo.png" class= "logo1" alt="">
	  

	  <ul>
	   
	     <li class = "navli"><a href= "hphomepage.html" class= "btn1"> Home </a></li>
		 <li class = "navli"><a href= "aboutus.php" class= "btn1"> About Us </a></li>
		 <li class =  "navli"><a href= "adminlog.php" class= "btn1"> Admin </a></li>
		 <li class =  "navli"><a href= "jobview.php" class= "btn1"> Join Us ! </a></li>
	   <li class = "navli"><a href = "logout.php" class = "btn1"><u style="color: white;height: 5px;">Log-out</u></a></li>
		
	  </ul>
	  <br>
	  
</nav>
<center>
<font style="color: Misty ; font-family:'Lucida Handwriting'; font-size: 35px;font-weight: 100; margin-top: 10px; margin-right:10px;align: left;  "> <b>Hello ,<?php echo $_SESSION['name']; ?> 
	 </b></font>
</center>
<div class="container">

<div class="services">
        <h1> Our<span> Services </span> </h1>
		<p> What type of services you are looking for ? </p>
 </div>
 <div class="row">
   <div class ="col-md-4">
     <div class ="service-box">
	
	  <h3><span> Beauty and Wellness</span> Services  </h3>
	  <p> Elevate your self-care routine schedule at HousePro 's Salon and massage services, where expert therapists pamper you with refreshing facials, soothing massages, and indulgent head massages
	  </p>
	  <br>
	  <div class ="divbtn">
	  <a href= "beutycat.php" class ="btn"><font class = "f" >BOOK NOW </font> </i></a> 
	  </div>
    </div>
   </div>
	<div class ="col-md-4">
     <div class ="service-box">
	  <h3><span>Cleaning</span> Services </h3>
	  <p> HousePro is your trusted partner for comprehensive cleaning solutions.Elevate the cleanliness of your living spaces with our professional cleaning services, ensuring a fresh and hygienic environment for your family.  </p>
	  <div class ="divbtn">
	  <a href= "cleacat.php" class ="btn"><font class = "f" >BOOK NOW </font> </i></a> 
	  </div>
	 </div>
	</div>
	<div class ="col-md-4">
     <div class ="service-box">
	  <h3><span> Plumbing </span> Services  </h3>
	  <p> HousePro brings you top expertise with our EPlumber, and services, ensuring your home projects are handled with precision and care. Experience smooth plumbing solutions with the best plumbers near you.Trust HousePro for all your household service needs. </p>
	   <div class ="divbtn">
	  <a href= "plubcat.php" class ="btn"><font class = "f" >BOOK NOW </font> </i></a> 
	  </div>
	 </div>
	</div>
 </div>
 <br>
 <div class="row">
   <div class ="col-md-4">
     <div class ="service-box">
	  <h3><span>Electrician's </span> Services </h3>
	  <p> HousePro  offers a range of household services, including Electrician solutions. If you're seeking an electrician near you for electrical repairs or installations, we have you covered. Our skilled professionals are committed to delivering top-class services to our customers. Trust HousePro for reliable and efficient household services.   </p>
	  <div class ="divbtn">
	  <a href= "elecat.php" class ="btn"><font class = "f" >BOOK NOW </font> </i></a> 
	  </div>
	 </div>
	 </div>
	<div class ="col-md-4">
     <div class ="service-box">
	  <h3><span> Personalised Catering</span> Services  </h3>
	  <p> The private chef you hire from HousePro will make sure that you enjoy the complete fine dining experience at your home, serving every dish hot and fresh.</p>
	  <br>
	  <br>
	  <br>
	 <div class ="divbtn">
	  <a href= "catser.php" class ="btn"><font class = "f" >BOOK NOW </font> </i></a> 
	  </div>
	 </div>
	</div>
	<div class ="col-md-4">
     <div class ="service-box">
	  <h3><span>Repair and Servicing </span> Services  </h3>
	  <p> When it comes to AC & Appliance Repair, HousePro is the name you can rely on. Whether you're dealing with a water purifier that's not dispensing clean water, a refrigerator that's not cooling efficiently, or any other appliance issue, our skilled technicians are here to help. We offer comprehensive solutions to keep your home appliances running smoothly. </p>
	  <div class ="divbtn">
	  <a href= "reser.php" class ="btn"><font class = "f" >BOOK NOW </font> </i></a> 
	  </div>
	 </div>
	</div>
 </div>
 <br>
<div class="row">
   <div class ="col-md-4">
     <div class ="service-box">
	
	  <h3><span> Painting and WaterProofing </span> Services  </h3>
	  <p> Elevate your home's aesthetic appeal with HousePro's comprehensive painting, ⁤⁤From full home painting to room painting, our skilled painters deliver best results tailored to your preferences. ⁤⁤Trust HousePro to transform your home.</p>
	  <br>
	  <div class ="divbtn">
	  <a href= "paiser.php" class ="btn"><font class = "f" >BOOK NOW </font> </i></a> 
	  </div> 
	 </div>
	</div>
	<br>
	  <br>
	  <br> 
	 <div class ="col-md-4">
     <div class ="service-box">
	
	  <h3><span>Healthcare  </span> Services  </h3>
	  <p>HousePro brings to you an online platform, which can be accessed for all your health needs. We are trying to make healthcare a hassle-free experience for you. Get your Pysiotherapy Training Services , Yoga Training Session, Pilates Training Sesssion, Care Nurses and other health-related products delivered at home. Lab tests? That too in the comfort of your home...</p>
	  <br>
	  <div class ="divbtn">
	  <a href= "hchompage.html" class ="btn"><font class = "f" >BOOK NOW </font> </i></a> 
	  </div> 
	 </div>
	</div>
 </div>	
 <br>
 <br>
 <br>
 <br>
</body>
</html> 