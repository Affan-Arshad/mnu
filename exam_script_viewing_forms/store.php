<?php

include("../helpers/auth.php");
include("../helpers/dbconn.php");

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

$insert_q = "Insert into exam_script_viewing_forms (
    fullname_and_address,
    student_number,
    national_id_no,
    present_address,
    phone_number,
    course_name,
    faculty,
    course_code,
    enrolled_term,
    enrolled_year,
    subject_code,
    subject_name,
    lecturer,
    date,
    consent
) values (
    '$fullname_and_address',
    '$student_number',
    '$national_id_no',
    '$present_address',
    '$phone_number',
    '$course_name',
    '$faculty',
    '$course_code',
    '$enrolled_term',
    '$enrolled_year',
    '$subject_code',
    '$subject_name',
    '$lecturer',
    '$date',
    '$consent'
)";

mysqli_query($conn, $insert_q);

header("Location: /mnu/exam_script_viewing_forms?username=$username")

?>