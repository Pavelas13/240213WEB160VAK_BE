<?php

// Kintamųjų deklaracija ir reikšmių priskirimas:

    $kintamasis = 'Kintamojo reikšmė';
    $dar_vienas_kintamasis = 'Reikšmė';
    $darVienasKintamasis = 'Reikšmė'; // Komentaras
    $vardas = 'Kazimrias';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?php echo $kintamasis; ?></h1>

    <p><?php echo 'Mano vardas yra ' . $vardas . '.'; ?></p>
    <p><?php echo "Mano vardas yra $vardas."; ?></p>
    <!-- Mano vardas yra Kazimiras. -->

</body>

</html>