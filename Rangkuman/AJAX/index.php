
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



?>  
<body>
<?php
    if (!isset($_SESSION['name'])) {
        loginForm();
    } else {
    ?>
    <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
                <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            </div>

            <div id="chatbox">
                <?php
                if (file_exists("log.html") && filesize("log.html") > 0) {
                    $contents = file_get_contents("log.html");
                    echo $contents;
                }
                ?>
            </div>

            <form name="message" action="">
                <input name="usermsg" type="text" id="usermsg" class="input text-white input-bordered input-primary w-full max-w-xs" />
                <input class="btn btn-active ml-3" name="submitmsg" type="submit" id="submitmsg" value="Send" />
            </form>
        </div>
</body>
</html>