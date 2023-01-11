<?php

$random_tall = rand(1,10);

if ($random_tall < 50) {
    echo "<p>Du skal ha god mat på fredag.</p>";
} else if($random_tall < 100) {
    echo "<p>Du skal spille biliard innen februar.</p>"
} else if($random_tall<== 150) {
    echo "<p>Du skal bli photoshoppet overalt online neste mandag<./p>"
} else if($random_tall < 200) {
    echo "<p> Noen kommer til å skyte deg i Mai.</p>"
} else if($random_tall < 250) {
    echo "<p>Du kommer til å faste i April.</p>"
} else if($random_tall < 300) {
    echo "<p> Du skal kjøpe en lekepark i September.</p>"
} else if($random_tall < 350) {
    echo "<p>Du kommer til å dra på lekeland med  et familiemedlem i morgen.</p>"
} else if($random_tall < 400) {
    echo "<p>No ille kommer til å skje en eller annen dag.</p>"
} else if($random_tall == 666) {
    echo "<p> Vennene dine kommer til å ha et satanisk ritual for å få djevelen til huset ditt på Julaften.</p>"
} else if($random_tall < 450) {
    echo "<p>Du ligger på bakken 10 ganger i dag.</p>"
} else {
    echo "<p>I morgen blir en vanlig dag.</p>"
}

?>