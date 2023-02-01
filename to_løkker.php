<?php
$x="*";
for($i=0; $i<5; $i++) {
    echo "$x<br>";
    for($x="*"; $y<5; $x++) {
        $x = $x + "*";
    }
}
