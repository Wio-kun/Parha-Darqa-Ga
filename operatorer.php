<!doctype html>
<html>

    <head>

    </head>

    <body>

        <?php

        $£ = 0,82;
        $€ = 0,94;
        $¥ = 132,44;
        $Skrift1 = "Cash";
        $Skrift2 = "Street";

        $sammensatt = $£ + $€ + $¥;
        $forskjell1 = $£ - $€;
        $forskjell2 = $£ - $¥;
        $forskjell3 = $€ - $¥;
        $for_mye = $£ * $€ * $¥;
        $rare_tall = $£ / $€ / $¥;

        $tekst = $Skrift1 . $Skrift2;
        $bra_tekst = $Skrift1 . " " . $Skrift2 . " 666";

        echo "Summen lir $sammensatt <br>";
        echo "Forskjellen mellom £ og € blir $forskjell1 <br>";
        echo "Forskjellen mellom £ og ¥ blir $forskjell2 <br>";
        echo "Forskjellen mellom € og ¥ blir $forskjell3 <br>";
        echo "Hvis du ganger det sammen får du $for_mye <br>";
        echo "Hvis du deler alt på hverandre får du $rare_tall <br>";
        
        echo "<br><br>";

        echo "$tekst <br>";
        echo $bra_tekst;

        ?>

    </body>

</html>

<!doctype html>
<html>

    <head>

    </head>

    <body>

        <?php

        $tall1 = 17;
        $tall2 = 9;
        $tekst1 = "Karl";
        $tekst2 = "Johan";

        $sum = $tall1 + $tall2;
        $differanse = $tall1 - $tall2;
        $produkt = $tall1 * $tall2;
        $kvotient = $tall1 / $tall2;

        $langTekst = $tekst1 . $tekst2;
        $bedreTekst = $tekst1 . " " . $tekst2 . "s gate";

        echo "Summen blir $sum <br>";
        echo "Differansen blir $differanse <br>";
        echo "Produktet blir $produkt <br>";
        echo "Kvotienten blir $kvotient <br>";

        echo "<br><br>";

        echo "$langTekst <br>";
        echo $bedreTekst;

        ?>

    </body>

</html>