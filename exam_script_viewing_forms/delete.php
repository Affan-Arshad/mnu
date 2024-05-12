<?php

include('../helpers/dbconn.php');

$id = $_GET['id'];

$deleteQ = "DELETE FROM exam_script_viewing_forms where id = $id";

mysqli_query($conn, $deleteQ);

header("Location: /mnu/exam_script_viewing_forms");