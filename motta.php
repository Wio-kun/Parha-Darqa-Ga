 
        <?php

        if(isset($_GET["farge"])) {
            echo $_GET["farge"];
        }


        ?>


<!doctype html>
<html>
    <head>
    <style>
            div {
                background-color:  <?php echo $_GET["farge"]; ?>;
              
            }
        </style>

    </head>

    <body>
       
        <div>
hghghghg
        </div>

    </body>
</html>