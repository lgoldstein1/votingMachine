<?php
$password = $_GET["voterid"];
if ($password == 24601) {
    echo "Correct voter password, redirecting to voting page!";
    echo '<script type="text/javascript">
           window.location = "vmVoter.php";
           </script>';
}
else {
    echo 'Invalid password, redirecting to home page';
    echo '<script type="text/javascript">
           window.location = "vmAdminHome.php";
           </script>';
}
?>