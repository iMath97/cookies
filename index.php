<?php
    require_once "classes/dbConnection.class.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>cookies testen</h1>
    <?php
        if(!isset($_COOKIE["accessibility"])){
            echo '<div class="background light">';
        } else {
            echo '<div class="background '.$_COOKIE["accessibility"].'">';
        }
        
        echo '<p>Lorem ipsum dolor sit amet.</p>';
        echo '</div>';
    ?>
    
    <button id="toggle">Toggle background</button>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="js/accessibility.js"></script>
</body>
</html>