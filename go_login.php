<?php
if(!isset($_SESSION['login_id'])) {
    echo "Youre not logged inn";
    header("Refresh:1; url=login.php", true, 303);
    die();
}
?>