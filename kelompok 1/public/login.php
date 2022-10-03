<?php

if(isset($_POST["submit"])){
    if($_POST["username"] == "kodecita" && $_POST["password"] == "123" ){
        header("Location: phpdasar.html");
        exit;
    }else{
        $error = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    
    <ul class="space-y-5 my-auto items-center content-center h-screen  flex px-10 ">

    <div class="flex login">
        
    </div>

        <form action="" method="POST" class="space-y-5 border-2  p-10 mx-auto  rounded-md login">
        <li>
        <label for="username" class="text-white font-semibold">Username: </label>
        <input type="text" name="username" class="text-black" id="username">
        </li>
        <li>
        <label for="password" class="text-white font-semibold">Password :  </label>
        <input type="password" name="password" class="text-black"  id="password">
        </li>
        <li>
        <button type="submit" name="submit" class="px-5 py-2 bg-orange-400 text-white rounded-md mx-auto flex">Login</button>
        </li>


        <?php if (isset($error) ) : ?>
        <p class="text-black text-center mt-10">username / password salah</p>
        <?php endif; ?>
        
    </form>

  
    
   
    </ul>

    <style>
        body{
            background: linear-gradient(120deg, #107D95, #fff);
        }
        .login{
            background: linear-gradient(315deg, #F3CF0E, #d400d4);
        }
    </style>
</body>
</html>