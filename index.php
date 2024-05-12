<?php

include("layout/header.php");
include("helpers/auth.php");
include("helpers/dbconn.php");

?>

<h3>Services</h3>
<ul>
    <li>
        <a href="exam_script_viewing_forms?username=<?php echo $username; ?>">Exam Script Viewing</a>
    </li>
</ul>

<?php

include("layout/footer.php");

?>

