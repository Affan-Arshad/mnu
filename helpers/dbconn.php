<?php

include_once("dotenv.php");
include_once("printException.php");

try {
    $conn = mysqli_connect(
        $env['DB_HOSTNAME'],
        $env['DB_USERNAME'],
        $env['DB_PASSWORD'],
        $env['DB_DATABASE'],
        $env['DB_PORT'] ?? null
    );

    echo "<script>console.log('DB Connection Successful')</script>";
} catch (\Throwable $th) {
    printException($th);
}

?>