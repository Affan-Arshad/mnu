<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

if(!isset($_POST['userRegistration'])) {
    header('Location: .');
}


