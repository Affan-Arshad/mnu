<?php

$referer = $_SERVER['HTTP_REFERER'];

if(!str_ends_with($referer, 's041781/')
&& !str_ends_with($referer, 's041781/index.php')) {
    header('Location: /s041781');
}

?>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>Age</th>
        </tr>
    </thead>

    <tbody>
        
    <?php

    foreach(file("data.txt") as $line) {
        $person = json_decode($line); ?>

        <tr>
            <td><?php echo $person->name; ?></td>
            <td><?php echo $person->email; ?></td>
            <td><?php echo $person->password; ?></td>
            <td><?php echo $person->gender; ?></td>
            <td><?php echo json_encode($person->hobbies); ?></td>
            <td><?php echo $person->age; ?></td>
        </tr>

    <?php
    }
    ?>

    </tbody>

</table>