<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="vmCSS.css">
    <title>
        Voting Machine Home
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="vmJS.js"></script>
</head>
<body>
<div class="header">The Great Goldstein Voting Machine</div>
<div class="padder" id="imag">
    <img src="https://image.freepik.com/free-icon/voting_318-110370.jpg"></div>
<div class="prompt">Please enter a valid admin ID.
    <form action="verify.php" method="get" autocomplete="off">
        <input type="text" name="adminid">
        <input type="submit">
    </form>
</div>
</body>
</html>