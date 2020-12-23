<?php
    session_start();
    extract($_POST);
    
    $_SESSION["USER"] = $user;

    echo "Session已新增";

    header("Refresh:3;url=index.php");