<form name="form"
      action=""
      method="post">
    <input required type="text"
           name="naam" placeholder="Naam" /><br>
    <input required type="text"
           name="postcode" placeholder="Postcode" /><br>
    <input required type="text"
           name="straat" placeholder="Straat" /><br>
    <input required type="text"
           name="plaats" placeholder="Plaats" /><br>
    <input required type="text"
           name="e-mail" placeholder="E-mailadres" /><br><br>
    <textarea name="commentaar"
              placeholder="Typ je commentaar in ..."
              rows=4></textarea><br>
    <input required type="submit"
           name="submit" placeholder="Submit" />
</form>

<?php
if(isset($_POST["submit"]) ){
    if(empty($_POST["naam"]) ){
        echo "Naam niet ingevuld";
    }
    else{
        $naam = $_POST["naam"];
        $taal = $_POST["taal"];
        if($taal == "N") {
            echo "Goedendag " . $naam;
        }
        elseif($taal == "E") {
            echo "Goodmorning " . $naam;
        }
        elseif($taal == "S") {
            echo "Buenos dias " . $naam;
        }
        else{
            echo "Taal niet ingevuld";
        }
    }
}