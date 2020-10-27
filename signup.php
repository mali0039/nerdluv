<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="nerdluv.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <form action="signup-submit.php" method="POST">
        <fieldset>
            <legend>New User Signup:</legend>
            <label for="name"><strong>Name:</strong></label>
            <input type="text" size="16" name="name" placeholder="">
            <br>
            <label for="gender"><strong>Gender:</strong> </label>
            <input type="radio" name="gender" value="M">
            <label for="gender">Male</label>
            <input type="radio" name="gender" value="F">
            <label for="gender">Female</label>
            <br>
            <label for="age"><strong>Age:</strong></label>
            <input type="text" maxlength="2" size="6" name="age">
            <br>
            <label for="personality"><strong>Personality type:</strong></label>
            <input type="text" maxlength="4" size="6" name="personality">
            <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a>
            <br>
            <label for="os"><strong>Favorite OS:</strong></label>
            <select name="os" id="os">
                <option value="Windows" selected="selected">Windows</option>
                <option value="Mac">Mac OS X</option>
                <option value="Linux">Linux</option>
            </select>
            <br>
            <br>
            <label for="seek-age"><strong>Seeking age:</strong></label>
            <input type="text" size="6" maxlength="2" name="min" placeholder="min"> to <input type="text" name="max" size="6" maxlength="2" placeholder="max">
            <br>
            <input type="submit">

        </fieldset>
    </form>
    <?php
    include 'footer.php'
    ?>
</body>
</html>