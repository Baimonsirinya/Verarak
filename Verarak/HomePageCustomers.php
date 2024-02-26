<?php include "connect.php" ?>


<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>HomePageCustomers</title>

        <!--responsive.css-->
    <link rel="stylesheet" href="responsive.css">

	<link rel="stylesheet" href="Navbar_admin.css">
    <link rel="stylesheet" href="HomePageCustomers.css">
	<!-- <link rel="stylesheet" href="/lib/w3.css"> -->
   
    </head>
	<body>
		<header>
			<a href="#" class="logo">Veraruk</a>
			<nav class="navbar">
				<ul>
					<li><a href="HomePageCustomers.php">หน้าหลัก</a></li>
					<li><a href="admin_Drugstorage.php">เกี่ยวกับเรา</a></li>
					<li><a href="CheckNoAppointment.html">นัดหมาย</a></li>
					<li><a href="admin_medrecords.php">ติดต่อเรา</a></li>
					<li><a href="#">User + </a>
					  <ul>
						<li><a href="#">ข้อมูล</a></li>
						<li><a href="#">Logout</a></li>
					  </ul>
				  </li>
				</ul>

		</header>
		<div id="welcome-hero" class="welcome-hero"></div>
		<div id="font-text">บริการของเรา</div>
		
		<?php
        $stmt = $pdo->prepare("SELECT * FROM course");
        $stmt->execute();
        while($row = $stmt->fetch()) :
    ?>
	<div class="container">
    <div class="square">

        <img src="images/<?=$row ["image"] ?>" class="mask">
     <div class="h1"><?=$row ["course_name"] ?></div>
        <p><?=$row ["recommend"] ?></p>
        
     <div><a href="https://medium.com/@laheshk/is-apple-a-design-company-f5c83514e261" target="_" class="button">Read More</a></div>
      </div>
      
      </div>
	  <?php endwhile; ?>
  
    </div>
	</body>
	
</html>
		
