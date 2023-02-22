<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slett</title>
</head>
<body> 
    <?php
        if(isset($_POST["delete_id"])) {
            $delete_id = $_POST["delete_id"];
            include "azure.php";
        }else {
            die("You have to assign a boss");
        }
        $sql = "DELETE FROM bosses WHERE delete_id='$delete_id'";

        if($con->query($sql)) {
            echo "Spørringen $sql ble gjennomført.";
        
        }else {
            echo "Something went wrong douring the $sql ($con->error).";
        }

    ?>
</body>
</html>