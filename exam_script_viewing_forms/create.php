<?php

include("../layout/header.php");

?>

<div class="form-wrapper">
    <img class="form" src="../assets/form.png" >
    <form action="insert.php" method="POST">
        <input type="text" name="fullname_and_address" value="test">
        <input type="text" name="student_number" value="test">
        <input type="text" name="national_id_no" value="test">
        <input type="text" name="present_address" value="test">
        <input type="number" max=9999999 min=7000000 name="phone_number" value="7777777">
        <input type="text" name="course_name" value="test">
        <input type="text" name="faculty" value="test">
        <input type="text" name="course_code" value="test">
        <input type="text" name="enrolled_term" value="1">
        <input type="text" name="enrolled_year" value="1">
        <input type="text" name="subject_code" value="test">
        <input type="text" name="subject_name" value="test">
        <input type="text" name="lecturer" value="test">
        <input required type="date" name="date">
        <input required type="checkbox" name="consent" value="1">
        <button>Submit</button>
    </form>

</div>

<?php

include("../layout/footer.php");

?>