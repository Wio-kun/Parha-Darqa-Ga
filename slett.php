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
        if(isset($_POST["slett_id"])) {
            $slett_id = $_POST["slett_id"];
            include "azure.php";
        }else {
            die("You have to assing a boss");
        }
        $sql = "DELETE FROM bosses WHERE slett_id='slett_id'";

        if($con->query($sql)) {
            echo "Spørringen $sql ble gjennomført.";
        
        }else {
            echo "Something went wrong douring the $sql ($con->error.";
        }

    ?>
</body>
</html>