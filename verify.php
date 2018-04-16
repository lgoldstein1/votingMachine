<?php
$password = $_GET["adminid"];
if ($password == 42) {
    echo "Correct admin password, beginning voting session!";
    echo '<script type="text/javascript">
           window.location = "vmAdminHome.php";
           </script>';
}
else {
    echo 'Invalid password, redirecting to home page';
    echo '<script type="text/javascript">
           window.location = "vmIndex.php";
           </script>';
}
?>