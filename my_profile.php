<?php
    session_start();
    include "go_login.php";
    
    include "azure.php";

    $id = $_SESSION['login_id'];

    $sql = "SELECT * FROM bruker WHERE idbruker='$id'";
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
    <div class='content'>
        <div class="side_color"></div>
        <div class='profile_div'>
            <?php
            echo"
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
                    <div class='bio'>
                        <div class='bio_text'>
                            <h2>Bio:</h2>
                            <h2>$bio</h2><br>
                        </div>
                    </div>
                </div>";
        
            ?>
            <?php 
            include "innlegg.php";
            echo "<br>";
            ?>
            <div class='post_div'>
                <?php
                    $sql = "SELECT * FROM innlegg WHERE idbruker='$id' ";
                    $resultat = $con->query($sql); 

                    while($rad = $resultat->fetch_assoc()) { 
                        $text = $rad['tekst'];
                        $date = $rad['date'];
                        $idinnlegg = $rad['idinnlegg'];
                        echo "
                        <div class='user_post'>
                            <img class='profile_pic_mini' src='img/$profile_pic' alt=''> <h3 class='post_text'>$text</h3><br>
                        </div>";

                        include "comment.php";

                        echo "
                            <form action='' method='POST'>
                                <input type='text' name='comments'><br>
                                <input type='hidden' name='idinnlegg' value='$idinnlegg'>
                                <input type='submit' name='comment_upload' value='Comment'><br><br>
                            </form>";
                    }
                    if(isset($_POST["comment_upload"])) {
                        $text=$_POST["comments"];
                        $idinnlegg=$_POST["idinnlegg"];
                        $id = $_SESSION['login_id'];

                        $sql = "INSERT INTO innlegg_kommentar (tekst, idbruker, idinnlegg, date) VALUES ('$text', '$id', $idinnlegg, NOW() )";
                    
                        if($con->query($sql)) {
                            echo "Comment was added to the database";
                        } else {
                            echo "error: $con->error";
                        }
                    }
                    echo "<br>";
                ?>
            </div>
            <div class='upload'>
                <?php
                    include "upload_img.php";
                ?>
            </div>
            <div class='img_div'>
                <?php
                    $sql = "SELECT * FROM media WHERE idbruker='$id' ";
                    $resultat = $con->query($sql); # henter ut fra DB

                    while($rad = $resultat->fetch_assoc()) { # loop gjennom alle brukere
                        $media_navn = $rad['media_navn'];
                        $idmedia = $rad['idmedia'];
                        echo "<a href='imageshow.php?media_id=$idmedia'>
                                <img class='bilder'src='img/$media_navn'>
                              </a>";
                    }
                    echo "<br><br>";
                ?>
            </div>
            <a href="index.php"><button class="insert"><h4 style="font-size:25px">Go back to home</h4></button></a>
        </div>
        <div class="side_color"></div>
    </div>
</body>
</html>