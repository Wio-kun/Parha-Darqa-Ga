<?php

$random_tall = rand(1,1500);


if ($random_tall == 666) {
    echo "<p>Vennene dine kommer til å ha et satanisk ritual for å få djevelen til huset ditt på Julaften.</p>";
}else if ($random_tall == 110) {
    echo "<p>Fulle gale Norske brannmenn</p>";
}else if ($random_tall == 112) {
    echo "Fulle gale Norske politimenn</p>";
}else if ($random_tall == 113) {
    echo "Fulle gale Norske leger</p>";
}else if ($random_tall == 911) {
    echo "<p>911 whats your emergancy</p>";
}else if ($random_tall < 150) {
    echo "<p>Du skal ha god mat på fredag.</p>";
} else if($random_tall < 300) {
    echo "<p>Du skal spille biliard innen februar.</p>";
} else if($random_tall < 450) {
    echo "<p>Du skal bli photoshoppet overalt online neste mandag</p>";
} else if($random_tall < 600) {
    echo "<p> Noen kommer til å skyte deg i Mai.</p>";
} else if($random_tall < 750) {
    echo "<p>Du kommer til å faste i April.</p>";
} else if($random_tall < 900) {
    echo "<p> Du skal kjøpe en lekepark i September.</p>";
} else if($random_tall < 1050) {
    echo "<p>Du kommer til å dra på lekeland med  et familiemedlem i morgen.</p>";
} else if($random_tall < 1200) {
    echo "<p>No ille kommer til å skje en eller annen dag.</p>";
} else if($random_tall < 1350) {
    echo "<p>Du ligger på bakken 10 ganger i dag.</p>";
} else {
    echo "<p>I morgen blir en vanlig dag.</p>";
}

?>