    <?php
    include "azure.php";

    $id_link = $_GET['idbruker'];

    $sql = "SELECT * FROM bruker WHERE idbruker='$id_link'";
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
        $profile_pic = $rad['profilbilde'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo "$usna";?></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    echo "
    <div class='profildiv'>
        <div class='profile_info'><h1 style ='font-size:65px'>$name $sname</h1><br></div>
        <div class='user'>
            <h1 style ='font-size:100px'>$usna</h1>
            <img class='profile_pic' src='img/$profile_pic' alt=''>
        </div>
        <div class='info_row'>
            <div class='info'>
                <div class='profile_info'><h2>$password</h2><br></div>
                <div class='profile_info'><h2>$email</h2><br></div>
                <div class='profile_info'><h2>$tlf</h2><br></div>
                <div class='profile_info'><h2>$occupation</h2><br></div>
                <div class='profile_info'><h2>$residence</h2><br></div>
                <div class='profile_info'><h2>$bd</h2><br></div>
            </div>
            <div class='bio'><h2>$bio</h2><br></div>
        </div>";
        
    ?>
    <div class='upload'>
        <?php
            $id = $id_link;
            include "upload_img.php";
        ?>
    <div class='bilde_div'>
        <?php
            $sql = "SELECT * FROM media WHERE idbruker='$id_link' ";
            $resultat = $con->query($sql); # henter ut fra DB

            while($rad = $resultat->fetch_assoc()) { # loop gjennom alle brukere
                $media_navn = $rad['media_navn'];  
                echo "<img class='bilder'src='img/$media_navn'>";
            }
        ?>
    </div>
</body>
</html>