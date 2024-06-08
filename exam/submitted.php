<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Art</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<?php

include('navigation.php');

// postin data 'as something' is not in any standard I know or taught to us
// so implementing my own way of posting data 'as userRegistraton'
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
?>

    
</body>
</html>