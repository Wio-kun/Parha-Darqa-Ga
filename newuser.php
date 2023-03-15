<?php
session_start();
include "go_login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class ="content">
        <div class="side_color"></div>
        <div class="all">
            <div class="newuser">
                <form method="POST">
                    <br><h3>Username</h3>
                    <input type="text" name="usernames"><br>
                    <h3>Name</h3>
                    <input type="text" name="names"><br>
                    <h3>Surname</h3>
                    <input type="text" name="surnames"><br>
                    <h3>Bio</h3>
                    <input type="text" name="bios"><br>
                    <h3>Password</h3>
                    <input type="text" name="passwords"><br>
                    <h3>E-mail</h3>
                    <input type="text" name="emails"><br>
                    <h3>Tlf</h3>
                    <input type="text" name="tlfnrs"><br>
                    <h3>Occupation</h3>
                    <input type="text" name="occupations"><br>
                    <h3>Residence</h3>
                    <input type="text" name="residences"><br>
                    <h3>Birthday</h3>
                    <input type="date" name="birthdays"><br>
                    <br><input type="submit" name="newuser" value="Add User"><br><br>
                </form>
                <br><br>
                <a href='index.php'><button class='home' style='height:25px'>See database</button></a>
            </div>
        </div>
        <div class="side_color"></div>
    </div>
<?php
include "azure.php";

if(isset($_POST["newuser"])) {
    $usna=$_POST["usernames"];
    $name=$_POST["names"];
    $sname=$_POST["surnames"];
    $bio=$_POST["bios"];
    $password=$_POST["passwords"];
    $email=$_POST["emails"];
    $tlf=$_POST["tlfnrs"];
    $occupation=$_POST["occupations"];
    $residence=$_POST["residences"];
    $bd=$_POST["birthdays"];

    $sql = "INSERT INTO bruker (brukernavn, fornavn, etternavn, bio, passord, 
    epost, tlf, skole, bosted, fodselsdato) 
    VALUES ('$usna', '$name', '$sname', '$bio', '$password', 
    '$email', '$tlf', '$occupation', '$residence', '$bd')";

    if($con->query($sql)) {
        echo "Username = $usna, Full name = $name $sname, Bio = $bio, Password = $password, 
        E-mail = $email, Tlf = $tlf, Occupation = $occupation, Residence = $residence, Birthday = $bd 
        was added to the app";
    }
    
}
?>
    
</body>
</html>
