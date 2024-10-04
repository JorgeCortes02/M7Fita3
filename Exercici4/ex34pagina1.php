<?php

$archivo = "ex34.txt";

$fileHandle = fopen($archivo, "r");

while (($frase = fgets($fileHandle)) !== false) {

    if ($frase[0] == "#" && $frase[1] == "#") {

        $frase = substr($frase, 2);
        echo "<h1>$frase</h1><br>";

    } else {

        echo "<p>$frase</p>";

    }

}

?>