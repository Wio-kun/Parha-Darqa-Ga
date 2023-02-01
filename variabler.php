<?php

$nå_år = "2023";

$oscar = "Oscar";
$ludvig = "Ludvig";
$beate = "Beate";

$o_år = "1980";
$l_år = "2003";
$b_år = "2007";

$o_alder = $nå_år - $o_år;
$l_alder = $nå_år - $l_år;
$b_alder = $nå_år - $b_år;

echo "$oscar er $o_alder år gammel <br>";
echo "$ludvig er $l_alder år gammel <br>";
echo "$beate er $b_alder år gammel <br>";
echo "<br>";

$o_l = $o_alder - $l_alder;
$o_b = $o_alder - $b_alder;
$l_b = $l_alder - $b_alder;

echo "$oscar er $o_l eldre enn $ludvig <br>";
echo "$oscar er $o_b eldre enn $beate <br>";
echo "$ludvig er $o_l yngre enn $oscar <br>";
echo "$ludvig er $l_b eldre enn $beate <br>";
echo "$beate er $o_b yngre enn $oscar <br>";
echo "$beate er $l_b yngre enn $ludvig <br>";

?>