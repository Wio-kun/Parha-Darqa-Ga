<form method="POST">
    Zone
    <br><input type="text" name="zones"><br>
    Doungeon
    <br><input type="text" name="doungeons"><br>
    Name
    <br><input type="text" name="names"><br>
    <br><input type="submit" name="insert" value="Add Boss">
</form>

<?php
include "azure.php";

if(isset($_POST["insert"])) {
    $zone=$_POST["zones"];
    $doungeon=$_POST["doungeons"];
    $name=$_POST["names"];


    $sql = "INSERT INTO bosses ('zone', doungeon, 'name') VALUES ('$zone', $doungeon', '$name')";

    if($con->query($sql)) {
        echo "The zone and doungeon $zone, $doungeon was added to database alongside the name $name";
    }
}




?>