<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'header.php';
    $data = $_POST["name"] . "," . $_POST["gender"] . "," . $_POST["age"] . "," . $_POST["personality"] . "," . $_POST["os"] . "," . $_POST["min"] . "," . $_POST["max"];
    file_put_contents('singles.txt',PHP_EOL . $data, FILE_APPEND);
    ?>
    <p><strong>Thank you!</strong></p>

    <p>Welcome to NerdLuv, <?php echo $_POST["name"] ?>!</p>

    <p>Now <a href="login.php">log in to see your matches!</a> </p>

    <br>

    <?php include 'footer.php' ?>

</body>
</html>