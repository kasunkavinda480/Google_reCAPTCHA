<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    <!-- FORM GOES HERE -->
    <form action="recaptcha-v2.php" method="post">
        <label for="fname">First Name*</label><br>
        <input type="text" name="fname" id="fname" value="malith" required autofocus><br><br>

        <label for="lname">Last Name*</label><br>
        <input type="text" name="lname" id="lname" value="deshan" required><br><br>

        <label for="email">Email Address*</label><br>
        <input type="email" name="email" id="email" value="malith$@g.c" required><br><br>

        <div class="g-recaptcha" data-sitekey="6LeoaZ8gAAAAABH9oPzIxxj1oREeK7Pkfl5HvSyR"></div>
        <br>
        <input type="button" id="submit" value="Submit" onclick="checkfurworking()">
    </form>
    <script src="./mianjsfile.js"></script>
</body>

</html>