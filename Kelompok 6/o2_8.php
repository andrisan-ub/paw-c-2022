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
    //SLIDE 58

    $name = "Fred";
    unset($name);
    echo $name; // throws a PHP notice

    //SLIDE 59

    $s1 = isset($name); // $s1 is false
    $name = "Fred";
    $s2 = isset($name); // $s2 is true   
?>    
</body>
</html>