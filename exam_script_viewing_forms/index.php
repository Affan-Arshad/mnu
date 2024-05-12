<?php

include_once("../helpers/dbconn.php");
include("../layout/header.php");

?>

<a href="create.php">Create Form</a>

<?php

$forms = mysqli_query($conn, 'SELECT * from exam_script_viewing_forms');

while($row = mysqli_fetch_row($forms)) { ?>

<div><?php echo var_dump($row); ?></div>

<?php } ?>

<?php
include("../layout/footer.php");
?>