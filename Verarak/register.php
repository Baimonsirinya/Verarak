<?php include "connect.php" ?>

<html lang="en">
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>Register</title>

        <!--responsive.css-->
    <!-- <link rel="stylesheet" href="responsive.css"> -->
	  <link rel="stylesheet" href="Navbar_admin.css">
    <link rel="stylesheet" href="register.css">
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="AddRegister.js"></script> -->

   
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
					<li><a href="#">ผู้ใช้งาน + </a>
					  <ul>
						<li><a href="#">ข้อมูล</a></li>
						<li><a href="#">Logout</a></li>
					  </ul>
				  </li>
				</ul>
		</header>
      <div class="card">
        <div class="card-header">Sign up</div>
        <form class="container-register" id="registrationForm" method="post">
            <p>Name :</p> 
            <input class="text-box" type="text" id="name" name="name" placeholder="Name"></br></br>
            <p>Lastname :</p>
            <input class="text-box" type="text" id="lastname" name="lastname" placeholder="Lastname"></br></br>
            <p>Tel :</p>
            <input class="text-box" type="text" id="tel" name="tel" placeholder="Tel"></br></br>
            <p>Username :</p>
            <input class="text-box" type="text" id="username" name="username" placeholder="Username"></br></br>
            <p>Password :</p>
            <input class="text-box" type="password" id="password" name="password" placeholder="Password"></br></br>
            <p>Confirm Password :</p>
            <input class="text-box" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password"></br></br>
            <button class="button-submit">Sign Up</button><br><br>
          </form>
          <p id="text-show">If you have an account, Please <a href="login.php">Login</p>
      </div>

      <div id="message"></div>

      <script>
        document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        event.preventDefault();

        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;

        if (password !== confirm_password) {
            alert("รหัสผ่านและยืนยันรหัสผ่านไม่ตรงกัน");
            return;
        }

        var formData = new FormData(this);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "AddRegister.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    if (xhr.responseText === 'มีชื่อผู้ใช้งานนี้อยู่ในระบบแล้ว') {
                        document.getElementById('username').classList.add('invalid');
                        alert(xhr.responseText);
                    } else {
                        alert(xhr.responseText);
                    }
                } else {
                    alert("มีข้อผิดพลาดในการส่งข้อมูล");
                }
            }
        };
        xhr.send(formData);
    });
});
    </script>
      
</body>
    </html>  