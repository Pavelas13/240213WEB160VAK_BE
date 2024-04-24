<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- © -->
<?php
function webSiteCopyRight($year = null) {
        if($year != null) {
            echo "© $year-" . date('Y');
        } else {
            echo '© ' . date('Y');
        }
}
webSiteCopyRight('2017');
echo '<br>';
webSiteCopyRight('2018');
echo '<br>';
webSiteCopyRight();