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
    //SLIDE 47

    $n = 12;
    echo "You are the $n th person";
    echo "<br>";
    echo "You are the {$n} th person";
    echo "<br>";
    //SLIDE 48

    $var = 'world';
    $$var = 100;

    echo 'Hello $var<br>';
    echo "Hello $var<br>";
    echo 'Hello $world<br>';
    echo "Hello $world<br>";
    echo "<br>";
    //SLIDE 49

    $s = 'Hello';
    echo $s[0]; // H
    echo $s[-1]; // o
    echo "<br>";
    //SLIDE 50

    if ($a == $b) {

        echo "a and b are equal";
    }
        
?>    
</body>
</html>