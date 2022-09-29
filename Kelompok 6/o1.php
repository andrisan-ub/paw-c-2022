<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="gaya.css">
    <title>Output Nomor 1</title>
</head>
<body style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: white;" class="mx-5 my-10 text-center">
    <h1><?php
    echo"Slide 43 <br>";
       $hello = "Hello ";
       $world = "world!";
       echo $hello, $world;
    ?>
    </h1>
    <?php 
    echo"<br>Slide 47 <br>";
        $var1 = 10;
        $var2 = 20;
        echo "Server output: ", $var1 * $var2;
    ?>
    <div id="client"></div>
    <script>
        var var1 = 10;
        var var2 = 30;
        var hasil = "Client output: " + var1 * var2;
        document.querySelector("#client").innerHTM = hasil;
    </script>
</body>
</html>