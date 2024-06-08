<?php

if(!isset($_GET['as']) || $_GET['as'] !== 'userRegistration') {
    header('Location: .');
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$hobbies = $_POST['hobbies'];
$age = $_POST['age'];

echo "<pre>";
print_r($_POST);
echo "</pre>";


$filename = 'data.txt';
$data = json_encode($_POST) . "\n";

if (is_writable($filename)) {

    if (!$fp = fopen($filename, 'a')) {
        echo "Cannt open file ($filename)";
        exit;
    }

    if (fwrite($fp, $data) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
    
    echo "Success, wrote ($data) to file ($filename)";
}