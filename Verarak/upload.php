<?php include "connect.php" ?>

<?php

$course_id = $_POST['course_id'];
$course_name = $_POST['course_name'];
$recommend = $_POST['recommend'];
$course_detail = $_POST['course_detail'];
// $number_of_times = $_POST['number_of_times'];
// $price = $_POST['price'];

if(isset($_POST["botton"])){
    // Get the uploaded file
    $file_name = $_FILES["upload"]["name"];
    $file_tmp = $_FILES["upload"]["tmp_name"];
    $file_new_name = rand(0, microtime(true)) . "-" . $file_name;
    $file_destination = "images/" . $file_new_name;

    // Move uploaded file to destination directory
    if(move_uploaded_file($file_tmp, $file_destination)){
        // Insert data into 'course' table
        $sql = "INSERT INTO course (course_id, course_name, recommend, course_detail, image) 
                VALUES (:course_id, :course_name, :recommend, :course_detail, :image)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':course_id', $course_id);
        $stmt->bindParam(':course_name', $course_name);
        $stmt->bindParam(':recommend', $recommend);
        $stmt->bindParam(':course_detail', $course_detail);
        $stmt->bindParam(':image', $file_new_name);

        $stmt->execute();
    }

} elseif(isset($_POST["submit"])){
    $course_id = $_POST['course_id'];
    $course_name = $_POST['course_name'];
    $number_of_times = $_POST['number_of_times'];
    $price = $_POST['price'];

    // Insert data into 'times_of_course' table
    $stmt = $pdo->prepare("INSERT INTO times_of_course (name_course, course_id, number_of_times, price) 
                            VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $course_name);
    $stmt->bindParam(2, $course_id);
    $stmt->bindParam(3, $number_of_times);
    $stmt->bindParam(4, $price);

    $stmt->execute();
}

?>
