<?php
    extract($_POST);
    unlink($img);
    header("location:index.php");