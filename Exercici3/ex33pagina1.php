<?php

$archivo = "ex33.txt";

printFile($archivo);
inserText($archivo);

function printFile($archivo)
{
    if (!file_exists($archivo)) {

        $fileHandle = fopen($archivo, "w");
        fclose($fileHandle);

    }

    $fileHandle = fopen($archivo, "r");

    while (($linea = fgets($fileHandle)) !== false) {

        echo "<p>$linea</p> <br> <hr> <br>";

    }
    fclose($fileHandle);

}

function inserText($archivo)
{

    if (isset($_POST["text"])) {

        $text = $_POST["text"];

        $fileHandle = fopen($archivo, "a");
        fwrite($fileHandle, "\n");
        fwrite($fileHandle, $text);
        fclose($fileHandle);
    }


}
?>

<form method="post">

    <textarea name="text"></textarea>
    <input type="submit">

</form>

<?php




?>