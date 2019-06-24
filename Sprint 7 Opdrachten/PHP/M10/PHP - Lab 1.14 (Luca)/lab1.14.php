<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type"
          content="text/html";
          charset="UTF-8" />
    <style>
        .album{clear: left; width: 100%;}
        .omslag{float: left;}
        .gegevens{float: left; padding-left: 20px;}
        .korting{clear: left;}
        .aantal{background-color: #f8ce6c;}
        .facturering{background-color: #f8ce6c;}
    </style>
    <title>Mijn winkelmandje</title>
</head>
<body style="">
<h3>Mijn winkelmandje</h3>
<form name="albums" action="" method="post">
    <div class="album">
        <div class="omslag">
            <img src="evora.jpg" width="50px" alt="X"/>
        </div>
        <div class="gegevens">
            Cesaria Evora "Em Um Concerto"  Prijs: $9
            <input type="hidden" name="albumcode[0]"
                   value="001" >
            <input type="hidden" name="artiest[0]"
                   value="Cesaria Evora" >
            <input type="hidden" name="album[0]"
                   value="Em Um Concerto" >
            <input type="hidden" name="prijs[0]" value="9" >
            <input type="hidden" name="genre[0]" value="World" >
            <br />Aantal:
            <input type="text" size=2 maxlength=3
                   name="aantal1" class="aantal" value="0">
        </div>
    </div>

    <div class="album">
        <div class="omslag">
            <img src="manuchao.jpg" width="50px" alt="X"/>
        </div>
        <div class="gegevens">
            Manu Chao "Clandestino"  Prijs: $5
            <input type="hidden" name="albumcode[1]" value="002" />
            <input type="hidden" name="artiest[1]" value="Manu Chao" />
            <input type="hidden" name="album[1]" value="Clandestino" />
            <input type="hidden" name="prijs[1]" value="5" >
            <input type="hidden" name="genre[1]" value="World"> <br/>
            Aantal:
            <input type="text" size=2 maxlength=3 class="aantal"
                   name="aantal2" value="0">


        </div>
    </div>

    <div class="album">
        <div class="omslag">
            <img src="imascore.jpg" width="50px" alt="X"/>
        </div>
        <div class="gegevens">
            IMAScore "Kaleidoscope"  Prijs: $9,50
            <input type="hidden" name="albumcode[2]" value="003" />
            <input type="hidden" name="artiest[2]" value="IMAScore" />
            <input type="hidden" name="album[2]" value="Kaleidoscope" />
            <input type="hidden" name="prijs[1]" value="9.5" >
            <input type="hidden" name="genre[1]" value="Epic"> <br/>
            Aantal:
            <input type="text" size=2 maxlength=3 class="aantal"
                   name="aantal3" value="0">


        </div>
    </div>

    <div class="korting">
        <br><hr />Korting:<br />
        <input type="checkbox" name="student" value="15" />
        Student: 15%<br />
        <input type="checkbox" name="klant" value="10" />
        Klant: 10%<br /><br />

        <p>Selecteer een betalingswijze:</p>
        <select name="betalingswijze" value="true">
            <option value=" "></option>
            <option value="vi">Visa</option>
            <option value="mc">MasterCard</option>
            <option value="pp">PayPal</option>
            <option value="id">IDeal</option>
        </select>
        <input type="submit" width="300px" name="verzenden"
               value=" Bestellen " />
        <br /><br /><br />
    </div>
</form>
</body>
</html>

<?php
$korting =0;
if (isset($_POST["student"])){$korting = $korting +15;}
if (isset($_POST['klant'])){$korting =$korting + 10;}


if (isset($_POST["betalingswijze"]))
{
    switch ($_POST['betalingswijze'])
    {
        case "vi" :
            echo "<br>Betalingswijze: Visa";
            break;
        case "mc" :
            echo "<br>Betalingswijze: MasterCard";
            break;
        case "pp" :
            echo "<br>Betalingswijze: PayPal";
            break;
        case "id" :
            echo "<br>Betalingswijze: IDeal";
            break;
        default :
            echo "<br>U heeft geen betalingswijze gekozen!";
    }
}

if (isset($_POST['verzenden'])){
    echo "<br>Bestelde albums: " . ( $_POST["aantal1"] + $_POST["aantal2"] + $_POST["aantal3"]) . "<br>Korting is: " .$korting. "%";
    include_once("externe_functions.php");
    $betalingswijze = $_POST["betalingswijze"];
    $serviceKosten = serviceKosten($betalingswijze);
    echo "<br>Servicekosten zijn: " . $serviceKosten;
}
?>