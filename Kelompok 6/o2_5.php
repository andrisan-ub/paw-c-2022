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
<?php
    //SLIDE 38

    var_dump(2 < 3); // true
    var_dump(3 < 3); // false
    var_dump(3 <= 3); // true
    var_dump(4 <= 3); // false
    var_dump(2 > 3); // false
    var_dump(3 >= 3); // true
    var_dump(3 > 3); // false
    echo "<br>";
    //SLIDE 39

    var_dump(true && true);
    var_dump(true && false);
    var_dump(true || false);
    var_dump(false || false);
    var_dump(!false);
    echo "<br>";
    //SLIDE 40

    var_dump(1 <=> 5);
    var_dump(1 <=> 1);
    var_dump(5 <=> 2);
    echo "<br>";
    //SLIDE 41

    $uname = isset($_GET['uname']) ? $_GET['uname'] : 'guest';
    var_dump($uname);

    $uname = $_GET['uname'] ?? 'guest';
    var_dump($uname);

    $_GET['uname'] = 'admin';
    $uname = $_GET['uname'] ?? 'guest';
    var_dump($uname);
    echo "<br>";
    //SLIDE 42

    $a = 3;
    $b = '3';
    $c = 5;
    var_dump($a == $b);
    var_dump($a === $b);
    var_dump($a != $b);
    var_dump($a !== $b);
    var_dump($a == $c);
    var_dump($a <> $c);
?>    
</body>
</html>