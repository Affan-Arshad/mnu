<?php

if (!isset($_GET['username'])) { ?>

    <div>Access Denied!</div>
    <script>
        let username = '';
        if (username = prompt("Enter username to login")) {
            window.location = window.location + '?username=' + username
        }
    </script>
<?php
    die();
} else {
    $username = $_GET['username'];
}

?>