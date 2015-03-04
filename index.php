<!DOCTYPE html>
<html>
    <head>
        <title>Clock</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <?php require "logic.php"; ?>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class = "main" id = "<?php echo $time ?>">
                <h1><?php echo $timer ?></h1>
        </div>
    </body>
</html>