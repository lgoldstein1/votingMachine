<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="vmVoter.css">
    <title>
        Voting Page
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="vmJS.js"></script>
    <script language="javascript">
        function KeepCount() {
            var NewCount = 0;
            if (document.senvote.hill.checked)
            {NewCount = NewCount + 1}
            if (document.senvote.rob.checked)
            {NewCount = NewCount + 1}
            if (document.senvote.dog.checked)
            {NewCount = NewCount + 1}
            if (document.senvote.caldwell.checked)
            {NewCount = NewCount + 1}
            if (document.senvote.fries.checked)
            {NewCount = NewCount + 1}
            if (NewCount == 3)
            {
                alert('Maximum Two Only!');
                return false;
            }
        }
    </script>
</head>
<body>
<div class="header">Exercise Your Civic Duty!</div>
<p>Presidential Election</p>
<p style="font-size: 14px">Vote for the next President of Drew University. Choose ONE.</p>
<form>
    <input type="radio" name="pres" value="mercuri"> Dr. Mercuri<br>
    <input type="radio" name="pres" value="andrew"> Andrew Castellucio<br>
    <input type="radio" name="pres" value="commons"> Joe Biden<br>
    <input type="radio" name="pres" value="squirrel"> A Squirrel<br>
    <input type="radio" name="pres" value="cookie"> A Commons Chocolate Chip Cookie
</form>
<div style="padding: 16px"></div>
<p>Senatorial Election</p>
<p style="font-size: 14px">Vote for the next Senators of Drew University. Choose up to TWO.</p>
<form name="senvote">
    <input type="checkbox" name="hill" value="hill" onClick="return KeepCount()"> Dr. Hill<br>
    <input type="checkbox" name="rob" value="rob" onClick="return KeepCount()"> Robert Juall<br>
    <input type="checkbox" name="dog" value="dog" onClick="return KeepCount()"> Andrew Castellucio's Dog<br>
    <input type="checkbox" name="caldwell" value="caldwell" onClick="return KeepCount()"> Jody Caldwell<br>
    <input type="checkbox" name="fries" value="fries" onClick="return KeepCount()"> Commons Waffle Fries
</form>
<div style="padding: 16px"></div>
<p>Policy Question</p>
<p style="font-size: 14px">Should Commons abolish oatmeal raisin cookies, now and forevermore?</p>
<form>
    <input type="radio" name="pres" value="yes"> Yes<br>
    <input type="radio" name="pres" value="no"> No<br>
</form>
<div style="padding: 16px"></div>
<a class="btn btn-primary" href="confirm.php" name="vote">Submit Your Vote!</a>
</body>
</html>