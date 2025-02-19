
 <?php
session_start();
include "inv.php";

 if(isset($_SESSION['name']))
 {
	  $na = $_SESSION['name'];
 }
if(isset($_SESSION['email']))
     {
		  $em = $_SESSION['email'];
	 }

    
   $query = "select * from orders where custname = '$na' and custemail = '$em'";
   $result = mysqli_query($co , $query);
 $sql = "SELECT  SUM(price) from orders where custname = '$na' and custemail = '$em'";
 $res = $co->query($sql);
 $sq = "SELECT  custaddres from orders where custname = '$na' and custemail = '$em'";
 $ra = $co->query($sq);
  $sqq = "SELECT  (SUM(price) + (SUM(price) * 0.18)) from orders where custname = '$na' and custemail = '$em'";
  $rp = $co->query($sqq);

 ?>
 <html>
    <head>
        <link rel="stylesheet" type="text/css" href="invsty2.css">
    </head>
    <body> 
	<div class = "page" size = "A4">
	  <div class = "topsection">
	    <div class = "address">
		  <div class = "addresscontent">
		    <h2> HousePro </h2>
			<p> SD-82 , Laxmi Villas , Shanti Nagar, Civil Lines, Jaipur, Rajasthan </p>
		  </div>
		</div>
		<div class = "contact">
		  <div class = "contactcontent">
		   <div class = "Email">
		     <span class = "span">Email : housePro@gmail.com  </span>
			 </div>
		    <div class = "number">
			 <span class = "span">Ph Number : +91 4562783912  </span>
			 </div>
	    </div>
	   </div>
	  </div>
	 <div class = "bilinvoice">
	    <div class = "title">
		  Billing Invoice 
		 </div>
		 <div class = "des">
		  <p class ="code">
		    #1234-BCHY68
		  </p>
		  <p class ="issue">
		  Issued:
		  <span>
			Apr, 12, 2023
		  </span>
		   </p>
		 </div> 
	</div>
	<div class = "bilto">
	    <div class = "title">
	    Billed To:
		</div>
	 <div class = "billed-sec">
		<div class = "name">
		<?php echo $na; ?> 
		</div>
		<p> <?php echo $em; ?> </p>

	</div>
	
	<div class = "billed-sec">
	    <div class = "subtitle"> Shipping Address </div>
		<div class= "shipadd"><?php 
		 $ro = mysqli_fetch_assoc($ra);
         echo $ro['custaddres']; 
		 ?>
<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>		 
	</div>
	</div>
	</div>
	
	<div class = "table">
	  <table>
	    <tr>
		  <th>OrderId</th>
		  <th>Service Category</th>
		  <th>Price  </th>
		 </tr>
		 <tr>
		  <?php
            while($row = mysqli_fetch_assoc($result))
            {
		  ?>
		     <td><?php echo $row['order_id'] ?> </td>
			 <td><?php echo $row['ser_cate'] ?> </td>
			 <td><?php echo $row['price'] ?> </td>
		  </tr>
		  <?php
		    }
		  ?>
		  <tr>
		  <td colspan = "2">SUB TOTAL</td>
		    <?php
			while($row = mysqli_fetch_array($res))
			{
			?>
            <td>
			<center>
			<b>
            <?php			
             echo  $row['SUM(price)'];
             echo "<br>";
			?>
			</center>
			</b>
			</td>
		</tr>
			<?php
			}
			?>
			<BR>
		<tr>
		 <b>
		 <center>
		  <td colspan = "2">TOTAL ( 18 % GST )</td>
		  
		    <?php
			while($rty = mysqli_fetch_array($rp))
			{
			?>
            <td>
			<center>
			<b>
            <?php			
             echo  $rty['(SUM(price) + (SUM(price) * 0.18))'];
             echo "<br>";
			?>
			</center>
			</b>
			</td>
		</center></b>
		</tr>
			<?php
			}
			?>
		 
	 </table>	 
	</div>
	<div class = "bottomsec">
	    <div class = "statuscontent">
		 <h4> Payment Status </h4>
		 <p class = "statusfree"></p>
		 <p> Payment at full statisfication </p>
	</body>
	</html>
		
	  
