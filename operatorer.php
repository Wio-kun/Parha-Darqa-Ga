<!doctype html>
<html>

    <head>

    </head>

    <body>

        <?php

        $£ = 0.82;
        $€ = 0.94;
        $¥ = 132.44;
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
        echo "$bra_tekst <br>";

        echo "<a href='https://www.iban.com/currency-converter?from_currency=JPY&to_currency=EUR&amount=1'>Valuta</a>";

        ?>

    </body>

</html>
