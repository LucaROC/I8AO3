<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
          content="text/html";
          charset="UTF-8" />
</head>
<body>
<form action="lab08.verwerken.php" method="post">
    <h1>Inschrijfformulier</h1><br>
    <input required type="text"
           name="achternaam" placeholder="Achternaam" /><br>
    <input required type="text"
           name="voornaam" placeholder="Voornaam" /><br>
    <input required type="text"
           name="straat" placeholder="Straat" /><br>
    <input required type="text"
           name="postcode" placeholder="Postcode" /><br>
    <input required type="text"
           name="plaats" placeholder="Plaats" /><br>
    <input required type="text"
           name="e-mail" placeholder="E-mailadres" /><br><br>
    Kies een opleiding:<br>
    <input type="radio" name="opleiding" value="ICT"> ICT<br>
    <input type="radio" name="opleiding" value="En">Engels<br>
    <input type="radio" name="opleiding" value="Te">Techniek<br>
    <input type="radio" name="opleiding" value="Nl">Nederlands<br>

    <input type="submit" name="submit" value="Versturen">
    <input type="reset" name="reset" value="Reset">
</form>
</body>
</html>
