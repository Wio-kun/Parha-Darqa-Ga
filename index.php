<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SM Nettside</h1>
    <?php
    include "azure.php";

    $sql = "SELECT * FROM bruker";
    $resultat = $con->query($sql);
    
    while($rad = $resultat->fetch_assoc()){
        $iduser = $rad['idbruker'];
        $usna = $rad['brukernavn'];
        $name = $rad['fornavn'];
        $sname = $rad['etternavn'];
        $bio = $rad['bio'];
        $password = $rad['passord'];
        $email = $rad['epost'];
        $tlf = $rad['tlf'];
        $occupation = $rad['skole'];
        $residence = $rad['bosted'];
        $bd = $rad['foodselsdato'];
    }
    ?>

    <a href="insert.php"><button class="insert"><h4>Add character to database</h4></button></a>
</body>
</html>