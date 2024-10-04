<p>INTRODUEIX DADES</p>

<form method="post">

    <textarea name="comentari"></textarea>
    <label for="separador">Separador</label>
    <input type="text" name="separador" id="separator">
    <input type="submit">

</form>


<?php

if (isset($_POST["comentari"]) && isset($_POST["separador"])) {

    $file = "comentaris.txt";

    if (!file_exists($file)) {

        $newFile = fopen($file, "a");
        fclose($newFile);
    }

    $fileHandle = fopen($file, "a");

    $texto = $_POST["comentari"];
    $separador = $_POST["separador"];

    $texto = str_replace(" ", $separador, $texto);
    $fileHandle = fopen($file, "a");
    fwrite($fileHandle, $texto);
    fwrite($fileHandle, "\n");
}




?>