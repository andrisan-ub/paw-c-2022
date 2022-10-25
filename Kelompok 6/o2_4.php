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
    //SLIDE 34

    $a = 10;
    $b = 3;
    var_dump($a + $b); // 13
    echo "<br>";
    var_dump($a - $b); // 7
    echo "<br>";
    var_dump($a * $b); // 30
    echo "<br>";
    var_dump($a / $b); // 3.333333...
    echo "<br>";
    var_dump($a % $b); // 1
    echo "<br>";
    var_dump($a ** $b); // 1000 (since PHP 5.6)
    echo "<br>";
    var_dump(-$a); // -10
    echo "<br>";
    //SLIDE 35

    $a = 3 + 4 + 5 - 2;
    $a = 13;
    $a += 14;
    $a -= 2;
    $a *= 4;
    echo "<br>";
    //SLIDE 36

    $a = '1';
    $b = 2;
    $c = $a + b;
    $d = $a . $b;
?>    
</body>
</html>