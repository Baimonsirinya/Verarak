<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="navbar_admin.css">
    <link rel="stylesheet" href="CheckNoAppointment.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
</head>
<body>
    <header>
        <a href="#" class="logo">Veraruk</a>
        <nav class="navbar">
            <ul>
                <li><a href="#">หน้าหลัก</a></li>
                <li><a href="admin_Drugstorage.php">เกี่ยวกับเรา</a></li>
                <li><a href="#">นัดหมาย</a></li>
                <li><a href="admin_medrecords.php">ติดต่อเรา</a></li>
                <li><a href="#">User + </a>
                  <ul>
                    <li><a href="#">ข้อมูล</a></li>
                    <li><a href="#">Logout</a></li>
                  </ul>
              </li>
            </ul>
    </header>
    <div class="imageposition">
        <img src="images/01.jpg" width="350" height="300" >
    </div>
    <div class="card">
      <div class="card-header">นัดหมายและพบแพทย์</div>
      <br><p>หากเคยมีประวัติการรักษาโปรดกรอกหมายเลขบัตรประชาชนของท่าน</p>
      <form class="container-ID">
            <p id="font-ID">หมายเลขบัตรประชาชน :
                <input class="textbox" type="text" id="text-box" placeholder="หมายเลขบัตรประชาชน" style="width: 300px;"></br>
            </p>
            <button class="button-submit">ยืนยัน</button><br><br>
        </form>
        <p>หากไม่เคยมีประวัติการรักษาโปรดคลิกที่ปุ่มลงทะเบียนเพื่อกรอกข้อมูลในการสร้างประวัติ</p>
        <a href="RegisterAppointment.html" class="button-appointment">ลงทะเบียน</a><br><br>
    </div>

</body>
</html>  