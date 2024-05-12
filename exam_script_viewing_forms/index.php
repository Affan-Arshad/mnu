<?php

include_once("../helpers/dbconn.php");
include("../layout/header.php");

?>

<a href="create.php">Create Form</a>

<table border=1>
    <caption>Exam Script Viewing Forms</caption>

    <thead>
        <tr>
            <th>Fullname and Address</th>
            <th>Student Number</th>
            <th>National ID Number</th>
            <th>Present Address</th>
            <th>Phone Number</th>
            <th>Course Name</th>
            <th>Faculty</th>
            <th>Course Code</th>
            <th>Enrolled Term</th>
            <th>Enrolled Year</th>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Lecturer</th>
            <th>Date</th>
            <th>Consent</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        <?php

        $forms = mysqli_query($conn, 'SELECT * from exam_script_viewing_forms');

        while ($row = mysqli_fetch_assoc($forms)) { ?>
            <tr>
                <td><?php echo $row['fullname_and_address']; ?></td>
                <td><?php echo $row['student_number']; ?></td>
                <td><?php echo $row['national_id_no']; ?></td>
                <td><?php echo $row['present_address']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['course_name']; ?></td>
                <td><?php echo $row['faculty']; ?></td>
                <td><?php echo $row['course_code']; ?></td>
                <td><?php echo $row['enrolled_term']; ?></td>
                <td><?php echo $row['enrolled_year']; ?></td>
                <td><?php echo $row['subject_code']; ?></td>
                <td><?php echo $row['subject_name']; ?></td>
                <td><?php echo $row['lecturer']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['consent']; ?></td>
                <td>
                    <a href="/mnu/exam_script_viewing_forms/edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <span> | <span>
                    <a href="/mnu/exam_script_viewing_forms/delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>

<?php
include("../layout/footer.php");
?>