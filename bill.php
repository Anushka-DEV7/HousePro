<html>
    <head>
        <link rel="stylesheet" type="text/css" href="billsty.css">
    </head>
    <body>
	<div class="divv2">
      <nav>
      <img src="img/HousePrologo.png" class= "logo" alt="">
	  <ul>
	     <li><a href= "hphomepage.html" class= "btn"> Home </a></li>
		  <li><a href= "aboutus.php" class= "btn"> About us </a></li>
		 <li><a href= "sercatog.php" class= "btn"> Cataloug </a></li>
		 <li><a href= "invoice.php" class= "btn"> BILLING </a></li>
		<li class = "navli"><a href = "logout.php" class = "btn"><u style="color: white;height: 5px;">Log-out</u></a></li>
	  </ul>
	  <div>
	  
	  </div>
	</nav>
    </center>
    <br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 
	<br> 


            <center>
                <font style="color: white ; font-family:'Lucida Handwriting'; font-size: 35px;font-weight: 100;"><b>
			
<?php
			  $Cname = $_POST['name'];
			  $Cemail = $_POST['email'];
			  $address = $_POST['address'];
			  $sercat;
			  $price;
			  if(isset($_POST["ch1"]))
			  {
				  $sercat = "Deep Tissue Pain Relief Massage(60 mins)";
				  $price = "1440";
			  }
			  if(isset($_POST["ch2"]))
			  {
				  $sercat = "Deep Tissue Pain Relief Massage(90 mins)";
				  $price = "1480";
			  }
			  if(isset($_POST["ch3"]))
			  {
				  $sercat = "Stress Relief Swedish Massage(60 mins)";
				  $price = "1200";
			  }
			  if(isset($_POST["ch4"]))
			  {
				  $sercat = "Stress Relief Swedish Massage(90 mins)";
				  $price = "1260";
			  }
			  if(isset($_POST["ch5"]))
			  {
				  $sercat = "Hair Spa (Cut and Style)";
				  $price = "1600";
			  }
			  if(isset($_POST["ch6"]))
			  {
				  $sercat = "Ayurvedic Strengthing spa";
				  $price = "1200";
			  }
			  if(isset($_POST["ch7"]))
			  {
				  $sercat = "O3+ Facial";
				  $price = "1050";
			  }
			  if(isset($_POST["ch8"]))
			  {
				  $sercat = "Elysian Glow Facial";
				  $price = "1200";
			  }
			  if(isset($_POST["ch9"]))
			  {
				  $sercat = "Deep Full House Cleaning(1BHK)";
				  $price = "4500";
			  }
			  if(isset($_POST["ch10"]))
			  {
				  $sercat = "Deep Full House Cleaning(2BHK)";
				  $price = "5000";
			  }
			  if(isset($_POST["ch11"]))
			  {
				  $sercat = "Deep Full House Cleaning(3BHK)";
				  $price = "1200";
			  }
			  if(isset($_POST["ch12"]))
			  {
				  $sercat = "Intense Bathroom / Kitchen Cleaning (1 Room)";
				  $price = "500";
			  }
			  if(isset($_POST["ch13"]))
			  {
				  $sercat = "Intense Bathroom / Kitchen Cleaning (2 Rooms)";
				  $price = "950";
			  }
			  if(isset($_POST["ch14"]))
			  {
				  $sercat = "Intense Bathroom / Kitchen Cleaning (3 Room)";
				  $price = "1400";
			  }
			  if(isset($_POST["ch15"]))
			  {
				  $sercat = "Mini Component Cleaning(12 items)";
				  $price = "3500";
			  }
			   if(isset($_POST["ch16"]))
			  {
				  $sercat = "Basin and Tap Repair";
				  $price = "99";
			  }
			   if(isset($_POST["ch17"]))
			  {
				  $sercat = "Basin and Tap Cleaning";
				  $price = "200";
			  }
			   if(isset($_POST["ch18"]))
			  {
				  $sercat = "Basin and Tap Installation";
				  $price = "500";
			  }
			   if(isset($_POST["ch19"]))
			  {
				  $sercat = "Installation 999L Tanks";
				  $price = "1000";
			  }
			   if(isset($_POST["ch20"]))
			  {
				  $sercat = "Installation above 999L Tanks";
				  $price = "1200";
			  }
			   if(isset($_POST["ch21"]))
			  {
				  $sercat = "Installation Washing Mchine Filters";
				  $price = "900";
			  }
			   if(isset($_POST["ch22"]))
			  {
				  $sercat = "Installation Shower Head Filters";
				  $price = "500";
			  }
			   if(isset($_POST["ch23"]))
			  {
				  $sercat = "Installation Taps Filters";
				  $price = "200";
			  }
			   if(isset($_POST["ch24"]))
			  {
				  $sercat = "Water Filters Cleaning)";
				  $price = "500";
			  }
			   if(isset($_POST["ch25"]))
			  {
				  $sercat = "Water Tanks Cleaning";
				  $price = "700";
			  }
			   if(isset($_POST["ch26"]))
			  {
				  $sercat = "Bathroom Fitting Installation";
				  $price = "3500";
			  }
			   if(isset($_POST["ch27"]))
			  {
				  $sercat = "Switchbox Installation";
				  $price = "230";
			  } 
			  if(isset($_POST["ch28"]))
			  {
				  $sercat = "Switchbox Repalcement";
				  $price = "50";
			  } 
			  if(isset($_POST["ch29"]))
			  {
				  $sercat = "Wiring (5M) ";
				  $price = "90";
			  } if(isset($_POST["ch30"]))
			  {
				  $sercat = "Heavy Appliances Installation";
				  $price = "3000";
			  } 
			  if(isset($_POST["ch31"]))
			  {
				  $sercat = "Heavy Appliances Repair";
				  $price = "2500";
			  } 
			  if(isset($_POST["ch32"]))
			  {
				  $sercat = "Appliances Installation";
				  $price = "5000";
			  } 
			  if(isset($_POST["ch33"]))
			  {
				  $sercat = "Appliances Un-Installation";
				  $price = "2000";
			  }
			   if(isset($_POST["ch34"]))
			  {
				  $sercat = "Professional Chefs";
				  $price = "500";
			  }
			   if(isset($_POST["ch35"]))
			  {
				  $sercat = "Professional Bartenders";
				  $price = "200";
			  }
			   if(isset($_POST["ch36"]))
			  {
				  $sercat = "Professional Waiters / Servers";
				  $price = "200";
			  }
			   if(isset($_POST["ch37"]))
			  {
				  $sercat = "AC Repair / Service";
				  $price = "2000";
			  }
			   if(isset($_POST["ch38"]))
			  {
				  $sercat = "Gyeser Repair / Service";
				  $price = "950";
			  }
			   if(isset($_POST["ch39"]))
			  {
				  $sercat = "Washing Machine Repair / Service";
				  $price = "700";
			  }
			   if(isset($_POST["ch40"]))
			  {
				  $sercat = "Laptop Repair / Service";
				  $price = "700";
			  }
			   if(isset($_POST["ch41"]))
			  {
				  $sercat = "Television Repair / Service";
				  $price = "300";
			  }
			   if(isset($_POST["ch42"]))
			  {
				  $sercat = "Microwave Repair / Service";
				  $price = "400";
			  }
			   if(isset($_POST["ch43"]))
			  {
				  $sercat = "Chimney Repair / Service";
				  $price = "900";
			  }
			   if(isset($_POST["ch44"]))
			  {
				  $sercat = "Refrigerator Repair / Service ";
				  $price = "800";
			  }
			   if(isset($_POST["ch45"]))
			  {
				  $sercat = "Water Purifier Repair / Service ";
				  $price = "500";
			  }
			    if(isset($_POST["ch46"]))
			  {
				  $sercat = "Full House Painting (Home Consultation) ";
				  $price = "50";
			  }
			   if(isset($_POST["ch47"]))
			  {
				  $sercat = "Pilates Trail Session ";
				  $price = "1000";
			  }
			  if(isset($_POST["ch48"]))
			  {
				  $sercat = "Waterproofing(home Consulatation) ";
				  $price = "50";
			  }
			  if(isset($_POST["ch49"]))
			  {
				  $sercat = "Pilates ( 1 month ) ";
				  $price = "9000";
			  }
			  if(isset($_POST["ch50"]))
			  {
				  $sercat = "Pilates ( 3 months ) ";
				  $price = "26000";
			  }
			  if(isset($_POST["ch51"]))
			  {
				  $sercat = "Physiotherapy Trail Session ";
				  $price = "200";
			  }if(isset($_POST["ch52"]))
			  {
				  $sercat = "Yoga Trail Session ";
				  $price = "300";
			  }if(isset($_POST["ch53"]))
			  {
				  $sercat = "Cardio Workout ( 1 month )";
				  $price = "6492";
			  }if(isset($_POST["ch54"]))
			  {
				  $sercat = "Power Yoga ( 1 month ) ";
				  $price = "5496";
			  }if(isset($_POST["ch55"]))
			  {
				  $sercat = "Intense Workout (1 month) ";
				  $price = "4500";
			  }if(isset($_POST["ch56"]))
			  {
				  $sercat = "Elder/Attendent Initial Vist ";
				  $price = "250";
			  }if(isset($_POST["ch57"]))
			  {
				  $sercat = "CBC Lab Test ";
				  $price = "430";
			  }if(isset($_POST["ch58"]))
			  {
				  $sercat = "Liver Function Lab Test ";
				  $price = "840";
			  }if(isset($_POST["ch59"]))
			  {
				  $sercat = "Thyroid Profile Lab Test ";
				  $price = "555";
			  }if(isset($_POST["ch60"]))
			  {
				  $sercat = "Diabetes Screening Lab Test ";
				  $price = "178";
			  }if(isset($_POST["ch61"]))
			  {
				  $sercat = "Covid RT-PCR Lab Test ";
				  $price = "750";
			  }if(isset($_POST["ch62"]))
			  {
				  $sercat = "Lipid Profile Lab Test ";
				  $price = "760";
			  }
			  
			  
			  
			  if(!empty($Cname)||!empty($Cemail)||!empty($address))
			  {
				  $host = "localhost";
				  $dbUserName = "root";
				  $dbPassword = "root";
				  $dbname = "housepro";
				  
				$conns = new mysqli($host ,$dbUserName, $dbPassword , $dbname);
				
				if(mysqli_connect_error())
				{
					die('Connect Error(' . mysqli_connect_errno().')'. mysqli_connect_error());
				}
				else
				{
					
					$INSERTS = "INSERT Into orders(custname , custemail , custaddres , ser_cate , price) values(? , ? , ? , ? , ?)";
					$stmts = $conns->prepare($INSERTS);
					$stmts -> bind_param("ssssi" , $Cname , $Cemail , $address , $sercat , $price);
					$stmts -> execute();
					echo 'Thank you! your selected services are being booked';
					
				}
			 $stmts->close();
			 $conns->close();
					
		      }
			  else
			  {
				  echo "all feilds are required";
				  die();
			  }
	
			  ?>
</b></u></font>
</center>
</div>
</body>
</html>
    