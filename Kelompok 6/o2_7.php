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
    //SLIDE 52

    $s = 'FILKOM UB';
    echo strlen($s); // 9
    echo "<br>";
    //SLIDE 53

    $s = 'FILKOM UB';
    echo strtolower($s);
    // filkom ub
    echo "<br>";
    //SLIDE 54

    $s = 'filkom ub';
    echo strtoupper($s);
    // FILKOM UB
    echo "<br>";
    //SLIDE 55

    $s = 'FILKOM UB';
    echo trim($s);
    // FILKOM UB
    echo "<br>";
    //SLIDE 56

    $s1 = 'FILKOM ';
    $s2 = 'UB';
    $s3 = $s1 . $s2;
    // FILKOM UB   
?>    
</body>
</html>