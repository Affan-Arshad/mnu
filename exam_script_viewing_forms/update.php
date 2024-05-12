<?php

include("../helpers/auth.php");
include("../helpers/dbconn.php");

$id = $_GET['id'];

$fullname_and_address = $_POST['fullname_and_address'];
$student_number = $_POST['student_number'];
$national_id_no = $_POST['national_id_no'];
$present_address = $_POST['present_address'];
$phone_number = $_POST['phone_number'];
$course_name = $_POST['course_name'];
$faculty = $_POST['faculty'];
$course_code = $_POST['course_code'];
$enrolled_term = $_POST['enrolled_term'];
$enrolled_year = $_POST['enrolled_year'];
$subject_code = $_POST['subject_code'];
$subject_name = $_POST['subject_name'];
$lecturer = $_POST['lecturer'];
$date = $_POST['date'];
$consent = $_POST['consent'];

$insert_q = "UPDATE exam_script_viewing_forms set 
    fullname_and_address = '$fullname_and_address',
    student_number = '$student_number',
    national_id_no = '$national_id_no',
    present_address = '$present_address',
    phone_number = '$phone_number',
    course_name = '$course_name',
    faculty = '$faculty',
    course_code = '$course_code',
    enrolled_term = '$enrolled_term',
    enrolled_year = '$enrolled_year',
    subject_code = '$subject_code',
    subject_name = '$subject_name',
    lecturer = '$lecturer',
    date = '$date',
    consent = '$consent'
where id = $id";

mysqli_query($conn, $insert_q);

header("Location: /mnu/exam_script_viewing_forms?username=$username")

?>