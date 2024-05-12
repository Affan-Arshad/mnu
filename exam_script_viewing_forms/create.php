<?php

include("../layout/header.php");
include("../helpers/auth.php");

?>

<div class="form-wrapper">
    <img class="form" src="../assets/form.png" >
    <form action="insert.php?username=<?php echo $username; ?>" method="POST">
        <input required type="text" name="fullname_and_address" >
        <input required type="text" name="student_number" >
        <input required type="text" name="national_id_no" >
        <input required type="text" name="present_address" >
        <input required type="number" max=9999999 min=7000000 name="phone_number">
        <input required type="text" name="course_name" >
        <input required type="text" name="faculty" >
        <input required type="text" name="course_code" >
        <input required type="text" name="enrolled_term" >
        <input required type="text" name="enrolled_year" >
        <input required type="text" name="subject_code" >
        <input required type="text" name="subject_name" >
        <input required type="text" name="lecturer" >
        <input required type="date" name="date">
        <input required type="checkbox" name="consent" value="1">
        <button>Submit</button>
    </form>

</div>

<?php

include("../layout/footer.php");

?>