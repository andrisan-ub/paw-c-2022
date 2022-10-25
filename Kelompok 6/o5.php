<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: white;" class="mx-5 my-10 text-center">
    <form action="login_process.php" method="POST">
        <label>
            Username:
            <input style="color: black;" type="text" name="username"><br>
        </label><br>
        <label>
            Password:
            <input style="color: black;" type="password" name="password"><br>
        </label><br>
        <input class="border-2" type="submit" value="Login">
    </form>
</body>
</html>