<?php

echo <<<EXPLANATION
<h2>Explatation single and double quotes</h2><br>
It is slightly faster to use single quotes. <br>PHP won't use additional processing to interpret what is inside the single quote. <br>When you use double quotes PHP has to parse to check if there are any variables within the string.<br> A single-quoted string does not have variables within it interpreted.
EXPLANATION;
?>