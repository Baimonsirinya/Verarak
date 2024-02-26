$(document).ready(function(){
    $('#registrationForm').submit(function(e){
        e.preventDefault();
        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();

        // ตรวจสอบว่ารหัสผ่านและยืนยันรหัสผ่านตรงกันหรือไม่
        if(password != confirm_password) {
            alert("รหัสผ่านและยืนยันรหัสผ่านไม่ตรงกัน");
            return;
        }

        // ถ้ารหัสผ่านตรงกัน ให้ทำการส่งข้อมูลไปยังไฟล์ PHP ตรวจสอบและบันทึกข้อมูล
        $.ajax({
            type: 'POST',
            url: 'AddRegister.php',
            data: $(this).serialize(),
            success: function(response){
                alert(response);
            }
        });
    });
});