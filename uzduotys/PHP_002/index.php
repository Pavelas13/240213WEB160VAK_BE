<?php
    $salis = 'Lietuva';
    $miestas = 'Vilnius';
    $populiacija = 574221;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 001 - sprendimas </title>
</head>
<body>

<!-- Panaudok kintamuosius ir reikšmes iš PHP 01 užduoties. Panaudok $miestas taip, kad gautume sakinį "Vilnius - Lietuvos sostinė" (naudok viengubas kabutes PHP kode). Panaudok $miestas ir $šalis taip, kad gautume sakinį "Vilnius ir Lietuva sparčiai auga"
(dvigubos kabutės PHP kode). -->

<?php

    $salis = 'Lietuva';
    $miestas = 'Vilnius';

    ?>
    
<p><?php echo $miestas; ?> - Lietuvos sostinė</p>

<p><?php echo $miestas  . ' - Lietuvos sostinė'; ?></p>

<p><?php echo "$miestas ir $salis sparčiai auga."; ?></p>


</body>
</html>
    

