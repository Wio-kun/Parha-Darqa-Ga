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
        $zone = $rad['zone'];
        $doungeon = $rad['doungeon'];
        $element = $rad['element'];
        $race = $rad['race'];
        $name = $rad['name'];
        $title = $rad['title'];
        $m_parent = $rad['m_parent'];
        $f_parent = $rad['f_parent'];
        $recommended_lvl = $rad['recommended_lvl'];
    
        echo "<tr>
                <td>$id_rb</td>
                <td>$zone</td>
                <td>$doungeon</td>
                <td>$element</td>
                <td>$race</td>
                <td>$name</td>
                <td>$title</td>
                <td>$m_parent</td>
                <td>$f_parent</td>
                <td>$recommended_lvl</td>
             </tr>";
    }

    echo "</table>";
    ?>
</body>
</html>