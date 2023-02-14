<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elden Ring RBDB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Elden Ring database</h1>
    <?php
    include "azure.php";

    $sql = "SELECT * FROM bosses";
    $resultat = $con->query($sql);
    
    echo "<table id='bosses'>
            <tr>
                <th>Id</th>
                <th>Zone</th>
                <th>Doungeon</th>
                <th>Element</th>
                <th>Race</th>
                <th>Name</th>
                <th>Title</th>
                <th>Male Parent</th>
                <th>Female Parent</th>
                <th>Recommended level</th>
            </tr>";
    
    while($rad = $resultat->fetch_assoc()){
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
    
        echo "<tr>
                <td>$id_rb</td>
                <td>$er_zone</td>
                <td>$doungeon</td>
                <td>$element</td>
                <td>$race</td>
                <td>$b_name</td>
                <td>$title</td>
                <td>$m_parent</td>
                <td>$f_parent</td>
                <td>$r_lvl</td>
                <td><a href='boss.php?boss_id=$id_rb'> link </a></td>
                <td>
                    <form method='post' action='slett.php'>
                    <input type='hidden' name='slett_id' value='$id_rb'>
                    <input type='submit' value='X'>
                    </form>
                </td>
             </tr>";
    }

    echo "</table><br>";
    ?>

    <a href="insert.php"><button class="insert"><h4>Add character to database</h4></button></a>

</body>
</html>