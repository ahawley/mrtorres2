<!DOCTYPE html>
<html>
    <head>
        <title>Clock</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <?php require "logic.php"; ?>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class = "main" id = "<?php echo $time ?>">
            <div id = "white">
                <h1><?php echo $timer ?></h1>
            </div>
        </div>
    </body>
</html>