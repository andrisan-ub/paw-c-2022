<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi</title>
    <link rel="stylesheet" href="/dist/output.css">
    <link rel="stylesheet" href="/src/input.css">
    <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="https://kit.fontawesome.com/3eeab2f4f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>
<body>

<div class="h-screen w-full mx-auto my-auto justify-center flex">

<div class="w-fit px-10 lg:px-20 py-5 my-auto rounded-md">
    <h1 class="text-white text-center font-bold text-2xl">Konversi Nilai Mahasiswa</h1>
    <h1 class="text-white text-center font-semibold text-xl">Nilai IPK Mahasiswa</h1>

    <ul class="py-5">

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    <li>
        <label for="nilai">Nilai</label>
        <input type="text" name="nilai" id="nilai" class="w-full">
    </li>
    <?php

if (isset($_POST['register'])) {
    $nilai = $_POST ['nilai'];
    if($nilai >= 3.75){
        echo "<h3>Nilai anda : A</h3>";
    }elseif ($nilai >= 3.24 and $nilai <= 3.74 ){
      echo "<h3>Nilai anda : B+</h3>";
    }elseif ($nilai >= 2.74 and $nilai <= 3.24 ){
        echo "<h3>Nilai anda : B</h3>";
    } elseif ($nilai >= 2.25 and $nilai <= 2.74 ){
        echo "<h3>Nilai anda : C+</h3>";
    } elseif ($nilai >= 1.75 and $nilai <= 2.24 ){
        echo "<h3>Nilai anda : C</h3>";
    } elseif ($nilai >= 1.25 and $nilai <= 1.74 ){
        echo "<h3>Nilai anda : D+</h3>";
    } elseif ($nilai >= 0.75 and $nilai <= 1.24 ){
        echo "<h3>Nilai anda : D</h3>";
    } elseif ($nilai <= 0.75 ){
        echo "<h3>Nilai anda : E</h3>";
    }   
}
?>
    <li>
    <button class="bg-orange-400 text-white  text-sm font-bold uppercase px-6 py-3 my-5 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" type="submit" style="transition: all 0.15s ease 0s;" name="register">
    Konversi
    </button>
    </li>
    </form>

    </ul>

    

</div>

</div>

    
</body>
</html>