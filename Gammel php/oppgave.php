<?php

$tall = array(42, 7, 3, 81, 666, 14, 0.3, 50, 1008, 69);
$ten = "over";

echo "<h3>svar</h3>";

for ($i=0; $i < count ($tall); $i++) {
    switch ($ten) {
        case "over":
            if ($tall[$i] >= 10) {
                echo "$tall[$i]. <br>";
            }
            break;
        case "under":
            if ($tall[$i] <= 10) {
                echo "$tall[$i]. <br>";
            }
            break;

    }
}

?>