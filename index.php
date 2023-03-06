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
    <div class="all">
        <div class="header">
            <h1>M.A.D</h1>
        </div>
        <?php
        include "azure.php";

        $sql = "SELECT idbruker, brukernavn FROM bruker";
        $resultat = $con->query($sql);
        
        while($rad = $resultat->fetch_assoc()){
            $iduser = $rad['idbruker'];
            $usna = $rad['brukernavn'];

            echo "<div class='profiles'><a href='profile.php?idbruker=$iduser'><button class='users'><p>$usna</p></button></a><br></div>";
        }
        ?>

        <div class="add"><a href="newuser.php"><button class="insert"><h4>Add user to database</h4></button></a></div>
    </div>
</body>
</html>