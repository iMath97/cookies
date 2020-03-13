<?php

    if(isset ($_POST['status'])){
        $preference = $_POST["preference"];
        setcookie("accessibility", $preference, time() + (86400*7), "/", null, null, true);

        if($preference == "light"){
            echo "Switch to darkmode";
        } else {
            echo "Switch to lightmode";
        }
    }

?>