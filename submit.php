<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Art</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="submitted.php?as=userRegistration" method="POST">
        <div class="input-line">
            <label for="name">name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="input-line">
            <label for="email">email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="input-line">
            <label for="password">password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="input-line">
            <label>Gender</label>
            <input type="radio" name="gender" id="male" value="male" required>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female" required>
            <label for="female">Female</label>
        </div>
        <div class="input-line">
            <label>Hobbies</label>
            <input type="checkbox" name="hobbies[]" id="gaming" value="gaming">
            <label for="gaming">Gaming</label>
            <input type="checkbox" name="hobbies[]" id="sleeping" value="sleeping">
            <label for="sleeping">Sleeping</label>
            <input type="checkbox" name="hobbies[]" id="coding" value="coding">
            <label for="coding">Coding</label>
        </div>
        <div class="input-line">
            <label for="age">age</label>
            <input type="number" name="age" id="age" required>
        </div>

        <button>Submit</button>
    </form>
</body>
</html>