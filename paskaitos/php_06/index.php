<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Data žodžiais
        // Thursday, April 4, 2024
        echo date('l, F j, Y');
        echo '<br>';
        // Data tarptautiniu formatu
        // 2024-04-04
        echo date('Y-m-d');
        echo '<br>';
        // Metai
        // 2024
        echo date('Y');
        echo '<br>';
        // Diena
        // 4
        echo date('j');
        echo '<br>';
        // Amerikietiškas laikas
        // 5:24 pm
        echo date('g:i a');
        echo '<br>';
        // 24 valandų formato laikas
        // 18:27:12
        echo date('H:i:s');
    ?>
    
</body>
</html>