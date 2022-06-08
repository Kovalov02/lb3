<?php
require_once __DIR__ . "/DbAccess.php";
$dbAccess = new DbAccess();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="script.js"></script>
    <title>Lab 3</title>
</head>
<body>
<div id="toLoad"></div>
<br>
<form action="" method="post" id="client">
    <select name="client">
        <?php
        $dbAccess->showClients();
        ?>
    </select>
    <input type="submit" value="Enter"><br>
</form>
<br>
<form action="DbAccess.php" method="post" id="statistic">
    <label>Choose the time interval:</label>
    <input type="datetime-local" name="start">
    <input type="datetime-local" name="stop">
    <input type="submit" value="Enter"><br>
</form>
<br>
<form action="" method="post" id="balance">
    <input type="hidden" name="balance">
    <input type="submit" value="Check balance"><br>
</form>
</body>
</html>
