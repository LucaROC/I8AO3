<?php
 $testarray = Array("een","twee",3,"vier");
        $testarray[4] = 5;
        echo "3  " . implode($testarray);

        echo "<br>4  Datatype is: " . gettype($testarray[4]);

        unset($testarray[4]);
        echo "<br>6  " . implode($testarray);

        array_unshift($testarray, "nul");
        echo "<br>8  " . implode($testarray);

        unset($testarray[0]);
        echo "<br>10  Datatype [0] is: " . gettype($testarray[0]);

        echo "<br>12  " . implode($testarray);

        unset($testarray[2]);
        echo "<br>14  " . implode($testarray);

        unset($testarray[4]);
        echo "<br>16  " . implode($testarray);
