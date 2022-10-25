<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: white;" class=" text-3xl mx-5 my-10 text-center">
<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == '123456' ){
    echo '<h1>Login Success<h1>';
}
else{
    echo '<h1>Login Fails<h1>';
}
?>
</body>
</html>