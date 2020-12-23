<?php
    session_start();
    session_destroy();
    echo "Session已刪除";
    header("Refresh:3;url=index.php");