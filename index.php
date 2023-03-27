<?php
session_start();
include "go_login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.A.D</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <div class="side_color"></div>
        <div class="all">
            <div class="header">
                <h1 style ="font-size:65px">M.A.D</h1>
            </div>
            <?php
            include "azure.php";

            $sql = "SELECT idbruker, brukernavn FROM bruker";
            $resultat = $con->query($sql);
            
            while($rad = $resultat->fetch_assoc()){
                $iduser = $rad['idbruker'];
                $usna = $rad['brukernavn'];

                echo "<div class='profiles'><a href='profile.php?idbruker=$iduser'><p style ='font-size:25px'>$usna</p></a><br></div>";
            }
            ?>

            <div class="add"><a href="newuser.php"><button class="insert"><h4 style="font-size:25px">Add user to database</h4></button></a></div><br>
            <form class="so_form" action="signout.php" method="POST">
                <input class="signout" type="submit" value="Signout" />
            </form>
        </div>
        <div class="side_color"></div>
    </div>
</body>
</html>