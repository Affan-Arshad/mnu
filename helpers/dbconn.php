<?php

try {
    $conn = mysqli_connect(
        'localhost',    // hostname
        'root',         // username
        '',             // password
        'affan_db',     // database
        '3306'          // port
    );

    echo "<script>console.log('DB Connection Successful')</script>";
} catch (\Throwable $th) {
    echo $th->getMessage();
    echo '<pre>' . $th->getTraceAsString() . '</pre>';
}

?>