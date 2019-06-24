<?php
  $brief = "
    Beste <b>{abonnee}</b><br>
    U heeft het laatste nummer van ons magazine ontvangen.<br>
    Omdat we u heel graag als abonnee willen behouden, bieden we
    u een aantrekkelijke en exclusieve korting:
<br>U betaalt <b>{bedrag-met-korting}</b>
    in plaats van 65 euro.<br><br>
    <i>Profiteer nu van deze aanbieding!</i><br><br>
    Met vriendelijke groet,<br>
    Sam Simons<br>
    Hoofdredacteur<br>";

    $abonnee = array("{abonnee}");
    $brief = str_replace($abonnee, "Jan Davids", $brief);

    $bedrag = array("{bedrag-met-korting}");
    $brief = str_replace($bedrag, "50", $brief);
    echo "$brief";

?>