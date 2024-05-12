<?php

include("../layout/header.php");
include("../helpers/auth.php");
include("../helpers/dbconn.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "Select * from exam_script_viewing_forms where id = $id");

$form = mysqli_fetch_assoc($result);

?>

<div class="form-wrapper">
    <img class="form" src="../assets/form.png" >
    <form action="update.php?id=<?php echo $form['id']; ?>&username=<?php echo $username; ?>" method="POST">
        <input type="text" name="fullname_and_address" value="<?php echo $form['fullname_and_address']; ?>">
        <input type="text" name="student_number" value="<?php echo $form['student_number']; ?>">
        <input type="text" name="national_id_no" value="<?php echo $form['national_id_no']; ?>">
        <input type="text" name="present_address" value="<?php echo $form['present_address']; ?>">
        <input type="number" max=9999999 min=7000000 name="phone_number" value="<?php echo $form['phone_number']; ?>">
        <input type="text" name="course_name" value="<?php echo $form['course_name']; ?>">
        <input type="text" name="faculty" value="<?php echo $form['faculty']; ?>">
        <input type="text" name="course_code" value="<?php echo $form['course_code']; ?>">
        <input type="text" name="enrolled_term" value="<?php echo $form['enrolled_term']; ?>">
        <input type="text" name="enrolled_year" value="<?php echo $form['enrolled_year']; ?>">
        <input type="text" name="subject_code" value="<?php echo $form['subject_code']; ?>">
        <input type="text" name="subject_name" value="<?php echo $form['subject_name']; ?>">
        <input type="text" name="lecturer" value="<?php echo $form['lecturer']; ?>">
        <input required type="date" name="date" value="<?php echo $form['date']; ?>">
        <input required type="checkbox" name="consent" value="1" <?php echo $form['consent'] ? 'checked' : ''; ?>>
        <button class="cancel" type="button"><a href="/mnu/exam_script_viewing_forms?username=<?php echo $username; ?>">Cancel</a></button>
        <button>Submit</button>
    </form>

</div>

<?php

include("../layout/footer.php");

?>