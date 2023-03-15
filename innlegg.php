

    <form action="" method="post">
        Text: <input type="text" name="tekst"><br><br>
        <input type="submit" name="innlegg_tekst" value="Write post">
    </form>

<?php
include "azure.php";

if(isset($_POST["innlegg_tekst"])) {
    $text=$_POST["tekst"];

    $sql = "INSERT INTO innlegg (tekst, idbruker, date) VALUES ('$text', '$id_link', NOW() )";
    echo $sql;
    $insert = $con->query($sql);

    if($con->query($sql)) {
        echo "Post was added to the database";
    } else {
        echo "error: $con->error";
    }
}



?>
