<?php

include("../layout/header.php");

?>

<div class="form-wrapper">
    <img class="form" src="../assets/form.png" >
    <form action="store.php" method="POST">
        <input type="text" name="fullname_and_address">
        <input type="text" name="student_number">
        <input type="text" name="national_id_no">
        <input type="text" name="present_address">
        <input type="number" max=9999999 min=7000000 name="phone_number">
        <input type="text" name="course_name">
        <input type="text" name="faculty">
        <input type="text" name="course_code">
        <input type="text" name="enrolled_term">
        <input type="text" name="enrolled_year">
        <input type="text" name="subject_code">
        <input type="text" name="subject_name">
        <input type="text" name="lecturer">
        <input type="date" name="date">
        <input type="checkbox" name="consent">
        <button>Submit</button>
    </form>

</div>

<?php

include("../layout/footer.php");

?>