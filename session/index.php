<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($_SESSION){ ?>
    
        <div><?php echo $_SESSION["USER"]; ?></div>
        <a href="delete.php">刪除Session</a>

    <?php }else{ ?>

        <form action="response.php" method="post">
            <input type="text" name="user">
            <input type="submit" value="新增Session">
        </form>

    <?php } ?>
</body>
</html>