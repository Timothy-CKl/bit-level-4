<?php
/**
 * Created by IntelliJ IDEA.
 * User: timot
 * Date: 2/13/2019
 * Time: 1:09 PM
 */
$naam = " ";
$wachtwoord = " ";
$leeftijd = " ";
if( isset($_POST['submit'])) {
    session_start();
    $naam = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord'];
    $leeftijd = $_POST['leeftijd'];
    if ($naam != " " || $wachtwoord != " " || $leeftijd != " ") {
        $cookie_naam=$naam;
        $cookie_pw=$wachtwoord;
        $cookie_value=$leeftijd;
        setcookie("naam", $cookie_naam, "/");
        setcookie("wachtwoord", $cookie_pw, "/");
        setcookie("leeftijd", $cookie_value, "/");
        header('location: profiel.php');
    }
}
else{
    echo "er is iets fout gegaan";
}
$_SESSION['naam'] = $naam;
$_SESSION['wachtwoord'] = $wachtwoord;
$_SESSION['leeftijd'] = $leeftijd;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin inloggen</title>
<body>


    <form method="post"> een form voor de gegevens
        <p>Naam</p>
        <br>
        <input type="text" name="naam" placeholder="naam" required>
        <br>
        <p>Wachtwoord</p>
        <br>
        <input type="password" name="wachtwoord" placeholder="wachtwoord" required>
        <br>
        <p>Leeftijd</p>
        <input type="number" name="leeftijd" placeholder="leeftijd" required>
        <br>
        <input type="submit" name="submit" value="inloggen">
    </form>
<button onclick="check()">
    check
</button>



</body>
</html>