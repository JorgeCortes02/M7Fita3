<p>Processa Contactes</p>


<table>

    <tr>
        <th>Nom</th>
        <th>Cognom1</th>
        <th>Cognom2</th>
        <th>Telefon</th>
    </tr>
    <?php

    $arrayDades = file('contactes31.txt');


    foreach ($arrayDades as $key) {

        $arrayFrase = explode(",", $key);

        echo "<tr>";
        $newLine = "";
        for ($i = 0; $i < count($arrayFrase); $i++) {

            if ($i == 0) {
                $newLine .= $arrayFrase[$i];

            } else {
                $newLine .= "#" . $arrayFrase[$i];
            }



            echo "<td>$$arrayFrase[$i]</td>";

        }

        $fileHandle = fopen('contactes31b.txt', 'a');
        fwrite($fileHandle, $newLine);
        fwrite($fileHandle, "\n");
        echo "</tr>";
    }




    ?>

</table>