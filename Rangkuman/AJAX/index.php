
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Penerapan Array</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <style>
        @font-face {
            font-family: studly;
            src: url('../img/font/Studly\ Regular.ttf') format('truetype');
        }

        .tugas {}
    </style>
    <meta charset="utf-8" />

    <title>Tuts+ Chat Application</title>
    <meta name="description" content="Tuts+ Chat Application" />
    <link rel="stylesheet" href="style.css" />
</head>
<?php

session_start();

if (isset($_GET['logout'])) {

    //Simple exit message
    $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>" . $_SESSION['name'] . "</b> has left the chat session.</span><br></div>";
    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);

    session_destroy();
    header("Location: index.php"); //Redirect the user
}

if (isset($_POST['enter'])) {
    if ($_POST['name'] != "") {
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    } else {
        echo '<span class="error">Please type in a name</span>';
    }
}
function loginForm()
{
    echo

    '
    <div class=" text-center justify-center mb-20">
    <h1 class="text-4xl font-[studly] text-black">AJAX CHAT</h1>
   </div>
    <div id="loginform">
    <p class= "text-xl" >Please enter your name to continue!</p>
    <form action="index.php" class="w-full" method="post">
      <label for="name" class="text-2xl">Name </label>
      <input type="text" name="name" id="name" class="input text-white input-bordered input-primary w-full max-w-xs" />
      <input type="submit" class="btn btn-active" name="enter" id="enter" value="Enter" />
    </form>
  </div>';
}

?>  


?>  
<body>
    
</body>
</html>