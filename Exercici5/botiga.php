<?php

$fileHandle = fopen("productes.txt", "r");

echo "<form method='post'>";
while ($line = fgets($fileHandle)) {

    echo "<label for='$line'>$line</label> <input type='checkbox' name='opciones[]' value = '$line'><br>";

}

echo "<input type='text' name='name'><br>";
echo "<input type='submit' >";

echo "</form>";
fclose($fileHandle);



if (isset($_POST["name"])) {


    $user = $_POST["name"];
    $newComand = $user;
    if (isset($_POST["opciones"])) {
        foreach ($_POST["opciones"] as $value) {

            $newComand .= ", " . trim($value);
        }
    }

    $fileHandle = fopen("comandes.txt", "a");
    fwrite($fileHandle, $newComand);
    fwrite($fileHandle, "\n");
    fclose($fileHandle);
}
?>