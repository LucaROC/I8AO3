<h3>php lab 1.4</h3>
<?php
    $naam = "Karim";
    $nederlands = "8.5";
    $engels = "7.7";
    $rekenen = "6.7";
    $programmeren = "8.5";
    $databases = "9.4";
    $cijfers = [$naam, $nederlands, $engels, $rekenen, $programmeren, $databases];
    $gemiddelde = array_sum($cijfers) / 5 - 0.08;

    $naam2 = "Sophie";
    $nederlands2 = "8.9";
    $engels2 = "8.7";
    $rekenen2 = "9.7";
    $programmeren2 = "9.5";
    $databases2 = "9.2";
    $cijfers2 = [$naam2, $nederlands2, $engels2, $rekenen2, $programmeren2, $databases2];
    $gemiddelde2 = array_sum($cijfers2) / 5 - 0.08;

    $cijferscombi = [$gemiddelde, $gemiddelde2];
    $groepsgemiddelde = array_sum($cijferscombi) / 2 ;

    echo "<table border='1'>
    <caption>
        <strong>Rapport</strong>
    </caption>
    <thead>
        <tr>
            <th>Naam</th><th>Nederlands</th><th>Engels</th>
            <th>Rekenen</th><th>Programmeren</th>
            <th>Databases</th>
            <th>Gemiddeld</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>$naam</td><td>$nederlands</td><td>$engels</td>
            <td>$rekenen</td><td>$programmeren</td>
            <td>$databases</td><td>$gemiddelde</td>
        </tr>
        <tr>
            <td>$naam2</td><td>$nederlands2</td><td>$engels2</td>
            <td>$rekenen2</td><td>$programmeren2</td>
            <td>$databases2</td><td>$gemiddelde2</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan='6'>Groep gemiddeld</td><td>$groepsgemiddelde</td>
        </tr>
    </tfoot>
        </table>";
    ?>
