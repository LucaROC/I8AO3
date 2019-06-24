<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dobbelsteen button</title>
</head>
<body>
<form method = "post" action = "">
    <button type= "submit" name = "sub" value = "call">Klik hier om 5 dobbelstenen te gooien.</button>
</form>
</body>
</html>
<?php

if (isset($_POST["sub"])){
    array_walk($dobbelsteen, 'printDobbel');
    echo "<br><i>De som van alle gegooide worpen samen zijn: $som </i>";
}

?>

