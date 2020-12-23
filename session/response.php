<?php
    session_start();
    extract($_POST);
    
    $_SESSION["USER"] = $user;

    echo $_SESSION["USER"];

    header("Refresh:3;url=index.php");