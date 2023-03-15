<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <div class="side_color"></div>
        <div class="all">
            <form method="POST" action="">
                <br><h3>Username</h3>
                <input type="text" name="username"><br>
                <h3>Password</h3>
                <input type="password" name="password"><br>
                <br><input type="submit" name="submit_login" value="Logg på">
            </form>
            <?php
                if(isset($_POST['submit_login'])) {
                    include "azure.php";

                    $usna =$_POST["username"];
                    $password = $_POST['password'];

                    $sql = "SELECT fornavn, brukernavn, passord, idbruker FROM bruker WHERE brukernavn='$usna'";
                    $resultat = $con->query($sql);
                    $rad = $resultat->fetch_assoc();

                    if ($rad['passord'] == $password) {
                        echo "You must log in, password correct";
                        echo "Youre logged in..";

                        session_start();
                        $_SESSION['login_id'] = $rad['idbruker'];
                        $_SESSION['fornavn'] = $rad['fornavn'];
                        header('Refresh:1; url=index.php', true, 303);

                    }else {
                        echo "Wrong password";
                    }
                }

            ?>
        </div>
        <div class="side_color"></div>
    </div>
</body>
</html>