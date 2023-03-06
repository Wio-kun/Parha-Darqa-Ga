<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<form method="POST">
    Username
    <br><input type="text" name="usernames"><br>
    Name
    <br><input type="text" name="names"><br>
    Surname
    <br><input type="text" name="surnames"><br>
    Bio
    <br><input type="text" name="bios"><br>
    Password
    <br><input type="text" name="passwords"><br>
    E-mail
    <br><input type="text" name="emails"><br>
    Tlf
    <br><input type="text" name="tlfnrs"><br>
    Occupation
    <br><input type="text" name="occupations"><br>
    Residence
    <br><input type="text" name="residences"><br>
    Birthday
    <br><input type="date" name="birthdays"><br>
    <br><input type="submit" name="insert" value="Add User"><br><br>
</form>

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
echo "<br><br>";
echo "<a href='index.php'><button style='height:25px'>See database</button></a>";
?>
    
</body>
</html>
