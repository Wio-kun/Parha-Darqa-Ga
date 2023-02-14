<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert_boss</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<form method="POST">
    Zone
    <br><input type="text" name="zones"><br>
    Doungeon
    <br><input type="text" name="doungeons"><br>
    Element
    <br><input type="text" name="elements"><br>
    Race
    <br><input type="text" name="races"><br>
    Name
    <br><input type="text" name="names"><br>
    Title
    <br><input type="text" name="titles"><br>
    Male Parent
    <br><input type="text" name="m_parents"><br>
    Female Parent
    <br><input type="text" name="f_parents"><br>
    Recommended Level
    <br><input type="number" name="recommended_lvls" min="1" max="713"><br>
    <br><input type="submit" name="insert" value="Add Boss"><br><br>
</form>

<?php
include "azure.php";

if(isset($_POST["insert"])) {
    $er_zone=$_POST["zones"];
    $doungeon=$_POST["doungeons"];
    $element=$_POST["elements"];
    $race=$_POST["races"];
    $b_name=$_POST["names"];
    $title=$_POST["titles"];
    $m_parent=$_POST["m_parents"];
    $f_parent=$_POST["f_parents"];
    $r_lvl=$_POST["recommended_lvls"];

    if ($r_lvl > 713 or $r_lvl < 1) {
        echo "Level must be between 1 and 713";
    }
    else {
        $sql = "INSERT INTO bosses (er_zone, doungeon, element, race, boss_name, 
        title, m_parent, f_parent, recommended_lvl) 
        VALUES ('$er_zone', '$doungeon', '$element', '$race', '$b_name', 
        '$title', '$m_parent', '$f_parent', '$r_lvl')";
    
        if($con->query($sql)) {
            echo "Zone = $er_zone, Doungeon = $doungeon, Element = $element, Race = $race, Name = $b_name, 
            Title = $title, Male Parent = $m_parent, Female Parent = $f_parent, Recommended Level = $r_lvl 
            was added to the database";
        }
    }
}
echo "<br><br>";
echo "<a href='index.php'><button style='height:25px'>See database</button></a>";
?>
    
</body>
</html>
