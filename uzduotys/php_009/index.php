<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $valstybiuSostines = [
        'Italija' => 'Roma',
        'Liuksemburgas' => 'Liuksemburgas',
        'Belgija' => 'Briuselis',
        'Danija' => 'Kopenhaga',
        'Suomija' => 'Helsinkis',
        'Slovenija' => 'Liublijana',
        'Vokietija' => 'Berlynas',
        'Graikija' => 'Atėnai',
        'Airija' => 'Dublinas',
        'Nyderlandai' => 'Amsterdamas',
        'Portugalija' => 'Lisabona',
        'Ispanija' => 'Madridas',
        'Švedija' => 'Stokholmas',
        'Švedija' => 'Stokholmas',
        'Didžioji Britanija' => 'Londonas',
        'Kipras' => 'Nikosija',
        'Lietuva' => 'Vilnius',
        'Čekija' => 'Praha',
        'Estija' => 'Talinas',
        'Vengrija' => 'Budapeštas',
        'Latvija' => 'Ryga',
        'Malta' => 'Valeta',
        'Austrija' => 'Viena',
        'Bulgarija' => 'Sofija',
        'Rumunija' => 'Bukareštas',
        'Lenkija' => 'Varšuva',

    ];

    // arsort($valstybiuSostines);
    asort($valstybiuSostines);

    ?>

    <ul>
        <?php
            foreach ($valstybiuSostines as $valstybe => $sostine) {
                echo "<li>$sostine yra valstybės $valstybe sostinė.</li>";
            }
        ?>
    </ul>

</body>
</html>