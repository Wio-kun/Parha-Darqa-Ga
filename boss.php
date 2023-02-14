<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boss</title>
</head>
<body>
    <?php
    include "azure.php";

    $id_link = $_GET['boss_id'];

    $sql = "SELECT * FROM boss WHERE id_remmembrance_bossses='$id_link'";
    $resultat = $con->query($sql);
    $rad = $resultat->fetch_assoc();
        $id_rb = $rad['id_remembrance_bosses'];
        $er_zone = $rad['er_zone'];
        $doungeon = $rad['doungeon'];
        $element = $rad['element'];
        $race = $rad['race'];
        $b_name = $rad['boss_name'];
        $title = $rad['title'];
        $m_parent = $rad['m_parent'];
        $f_parent = $rad['f_parent'];
        $r_lvl = $rad['recommended_lvl'];

    echo "$id_rb, $er_zone, $doungeon, $element, $race, $b_name, $title, $m_paremt, $f_parent, $r_lvl";


    ?>
</body>
</html>