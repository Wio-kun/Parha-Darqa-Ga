<!doctype html>
<html>

    <head>
        <title>Iazoiw</title>
        <link rel="stylesheet" href="style_for_fun.css">
    </head>

    <body>
        <div class="alt">
            <div class="header">
                <?php
                    echo "<h1 class='overskrift'>Iazoiw</h1>"
                ?>
            </div>
            <div class="home">
                <div class="linker">
                    <?php
                        echo "<a href='https://www.twitch.tv/iazoiw'><button><h1>twitch.tv/Iazoiw</h1></button></a>";

                        for ($i=0; $i < 101; $i++) {
                            echo "$i viewer/s <br>";
                        }
                    ?>
                </div>
                <div class="innhold">
                    <?php
                        echo "<div class='iazoiw_div'><img class='iazoiw'src='pineapple.jpg' alt='Iazoiw'></div>";
                        echo "<img class='beach'src='beach.jpg' alt='Beach'>";
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>