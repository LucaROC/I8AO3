<?php
if(isset($_POST["submit"]) ){
    if(empty($_POST["voornaam"]) || empty($_POST["achternaam"])){
        echo "Naam niet ingevuld";
    }
    else{
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $straat = $_POST["straat"];
        $postcode = $_POST["postcode"];
        $plaats = $_POST["plaats"];
        $email = $_POST["e-mail"];
        $opleiding = $_POST["opleiding"];

        echo "Uw gegevens zijn: <br>";
        echo "<br>Achternaam: " . $achternaam;
        echo "<br>Voornaam: " . $voornaam;
        echo "<br>Straat: " . $straat;
        echo "<br>Postcode: " . $postcode;
        echo "<br>Plaats: " . $plaats;
        echo "<br>E-mailadres: " . $email;

        if($opleiding == "ICT") {
            echo "<br><br>Helaas, " . $voornaam . " de ICT opleidingen zijn vol. Kies een andere opleiding.";
        }
        elseif($opleiding == "En") {
            echo "<br><br>U wordt ingeschreven voor de volgende opleiding: <br>";
            echo "Engels";
        }
        elseif($opleiding == "Nl") {
            echo "<br><br>U wordt ingeschreven voor de volgende opleiding: <br>";
            echo "Nederlands";
        }
        elseif($opleiding == "Te") {
            echo "<br><br>U wordt ingeschreven voor de volgende opleiding: <br>";
            echo "Techniek";
        }
    }
}