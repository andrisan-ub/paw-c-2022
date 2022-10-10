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
$nilai_mahasiswa = array("joko" => 97, "anwar" => 87, "budi"=> 77, "ipul" => 67, "putri" => 57);

foreach ($nilai_mahasiswa as $nama => $nilai){
    if ($nilai > 80){
        echo "Nilai $nama = A <br>";
    }
    else if ($nilai > 75 and $nilai <= 80){
        echo "Nilai $nama = B+ <br>";
    }
    else if ($nilai > 69 and $nilai <= 75){
        echo "Nilai $nama = B <br>";
    }
    else if ($nilai > 60 and $nilai <= 69){
        echo "Nilai $nama = C+ <br>";
    }
    else if ($nilai > 55 and $nilai <= 60){
        echo "Nilai $nama = C <br>";
    }
    else if ($nilai > 50 and $nilai <= 55){
        echo "Nilai $nama = D+ <br>";
    }
    else if ($nilai > 44 and $nilai <= 50){
        echo "Nilai $nama = D <br>";
    }
    else if ($nilai >= 0 and $nilai <= 44){
        echo "Nilai $nama = E <br>";
    }
}
?>
</body>
</html>