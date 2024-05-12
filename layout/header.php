<?php
    $username = $_GET['username'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNU</title>
    <link rel="stylesheet" href="/mnu/css/style.css">
    <link rel="icon" type="image/x-icon" href="/mnu/assets/favicon.ico">
</head>

<body>

    <div class="wrapper">

        <nav>
            <ul>
                <?php if (!isset($username)) { ?>
                    <li><a href="/mnu"><img class="logo" src="/mnu/assets/logo.png"></a></li>
                    <li><a href="/mnu">Login</a></li>
                    <?php } else { ?>
                    <li><a href="/mnu?username=<?php echo $username; ?>"><img class="logo" src="/mnu/assets/logo.png"></a></li>
                    <li><a href="/mnu?username=<?php echo $username; ?>">Home</a></li>
                    <li><a href="/mnu/exam_script_viewing_forms?username=<?php echo $username; ?>">Exam Script Viewing</a></li>
                    <li><a href="/mnu">Logout</a></li>
                <?php } ?>
            </ul>
        </nav>

        <div class="main-content">