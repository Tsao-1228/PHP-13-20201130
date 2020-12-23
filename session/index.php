<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="response.php" method="post">
        <input type="text" name="user">
        <input type="submit">
    </form>

    <?php
        session_start();
        if($_SESSION["USER"]){
            echo $_SESSION["USER"];
        }

    ?>
</body>
</html>