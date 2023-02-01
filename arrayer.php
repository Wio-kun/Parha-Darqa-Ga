<?php

$figurer = array ("Hisoka Morow", "Roronoa Zoro", "Kurosaki Ichigo", "Ban");

echo "<h3>Some anime charakters</h3>";
for($i=0; $i < count ($figurer); $i++) {
    echo "Figur med indeks $i: $figurer[$i] <br>";
}

echo '<h3>Arrayen $figurer</h3>';

var_dump($figurer);

echo "<br><br>";

echo $figurer[2];

echo "<br><br>";

$art = array("Hisoka Morow"=>"Snake", "Roronoa Zoro"=>"Tiger", "Kurosaki Ichigo"=>"Lion", "Ban"=>"Fox");

echo "<p>Hisoka Morow is a " . $art["Hisoka Morow"] . ".</p>";
echo "<p>Roronoa Zoro is a " . $art["Roronoa Zoro"] . ".</p>";
echo "<p>Kurosaki Ichigo is a " . $art["Kurosaki Ichigo"] . ".</p>";
echo "<p>Ban is a " . $art["Ban"] . ".</p>";

echo '<h3>Arrayen $Art</h3>';

var_dump($art);

echo "<br><br>";

$tall = array(1,2,3,4,5);
$sum = 0;

echo "<h3>Five numbers</h3>";

for ($x=0; $x < count ($tall); $x++) {
    $sum += $tall[$x];
}
echo "$sum";

?>