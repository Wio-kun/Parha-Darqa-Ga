    <?php
    include "azure.php";

    #$id_link = $_GET['idbruker'];

    $sql = "SELECT * FROM bruker WHERE idbruker='6'";
    $resultat = $con->query($sql);
    $rad = $resultat->fetch_assoc();
        $idbruker = $rad['idbruker'];
        $usna = $rad['brukernavn'];
        $name = $rad['fornavn'];
        $sname = $rad['etternavn'];
        $bio = $rad['bio'];
        $password = $rad['passord'];
        $email = $rad['epost'];
        $tlf = $rad['tlf'];
        $occupation = $rad['skole'];
        $residence = $rad['bosted'];
        $bd = $rad['fodselsdato'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo "$brukernavn";?></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    echo "
    <div class='profildiv'>
        <h1>$usna</h1><br>
        <h2>$name $sname</h2><br>
        <h2>$bio</h2><br>
        <h2>$password</h2><br>
        <h2>$email</h2><br>
        <h2>$tlf</h2><br>
        <h2>$occupation</h2><br>
        <h2>$residence</h2><br>
        <h2>$bd</h2><br>";
    ?>
</body>
</html>