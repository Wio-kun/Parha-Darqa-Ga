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

        echo "<a href='https://www.dnb.no/en/markets/fx-and-ir/currency-converter'>Valutakalkulator</a> <br>";
        
        $date = date("m");
        echo "$date <br>";
        if($date == "01") {
            echo "Januar";
        }
        else if ($date == "02") {
            echo "Februar";
        }
        else if ($date == "03") {
            echo "Mars";
        }
        else if ($date == "04") {
            echo "April";
        }
        else if ($date == "05") {
            echo "Mai";
        }
        else if ($date == "06") {
            echo "Juni";
        }
        else if ($date == "07") {
            echo "Juli";
        }
        else if ($date == "08") {
            echo "August";
        }
        else if ($date == "09") {
            echo "September";
        }
        else if ($date == "10") {
            echo "Oktober";
        }
        else if ($date == "11") {
            echo "November";
        }
        else if ($date == "12") {
            echo "Desember";
        }

        echo "<br><br>";

        $fødsel = 2006;



        $år = date("Y");
        $alder = $år - $fødsel;

        if($alder == 18) {
            echo "Du er 18";
        }
        else if ($alder > 18) {
            echo "Du er eldre enn 18";
        }
        else if ($alder < 18) {
            echo "Du er yngre enn 18";
        }

        echo "<br><br>";

        $tall = 0;
        $tall42 = 0;
        $tallx2 = 0;
        
        while ($tall <= 15) {
            echo "$tall. <br>";
            $tall = $tall + 1;
        }

        echo "<br>";

        for ($i=0; $i<=15; $i++) {
            echo "  $i. <br>";
        }

        echo "<br>";

        while ($tall42 <= 42) {
            echo "IT1. <br>";
            $tall42 = $tall42 + 1;
        }

        echo "<br>";

        for ($im=0; $im<=42; $im++) {
            echo "IT1. <br>";
        }

        echo "<br>";

        while ($tallx2 <= 20) {
            echo "$tallx2 <br>";
            $tallx2 += 2;
        }

        


        ?>

    </body>

</html>
