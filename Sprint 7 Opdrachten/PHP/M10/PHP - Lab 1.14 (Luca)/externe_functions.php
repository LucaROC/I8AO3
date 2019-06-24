<?php
function serviceKosten($betalingswijze){
    switch ($_POST['betalingswijze'])
    {
        case "vi" :
            $betalingswijze = "€2,-";
            break;
        case "mc" :
            $betalingswijze = "€2,50";
            break;
        case "pp" :
            $betalingswijze = "€1,50";
            break;
        case "id" :
            $betalingswijze = "€1,-";
            break;
        default :
            $betalingswijze = "-";
            break;
    }
    return($betalingswijze);
}
?>