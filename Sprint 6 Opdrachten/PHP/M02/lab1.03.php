<?php
/**
 * Created by PhpStorm.
 * User: lucad
 * Date: 14-3-2019
 * Time: 15:38
 */

/** Stap 1 */
$breedte = 10;
$lengte = 11;
$hoogte = 5;

/** Stap 2 */
$oppervlakte = $lengte * $breedte;
$volume = $lengte * $breedte * $hoogte;

/** Stap 3 */
echo "•Containerbasisoppervlakte is: " . $oppervlakte . "<br>";
echo "•Containervolume is: " . $volume;

