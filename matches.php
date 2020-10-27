<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nerdluv.css">
</head>
<body>
    <?php include 'header.php' ?>

    <form action="matches-submit.php" method="GET">
        <fieldset>
            <legend>Returning User:</legend>
            <label for="name"><strong>Name:</strong></label>
            <input type="text" size="16" name="name" placeholder="">
            <br>
            <input type="submit" value="View My Matches">
            

        </fieldset>
    </form>

    <?php include 'footer.php' ?>
</body>
</html>