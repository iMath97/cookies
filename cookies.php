<?php

    if(isset ($_POST['status'])){
        $preference = $_POST["preference"];
        setcookie("accessibility", $preference, time() + (86400*7));

        if($preference == "light"){
            echo "Switch to darkmode";
        } else {
            echo "Switch to lightmode";
        }
    }

?>