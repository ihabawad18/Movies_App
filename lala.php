<?php
    session_start();
    echo "yes";
    if(isset($_SESSION["email"])){
        echo $_SESSION["email"];
    }

?>