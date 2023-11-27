<?php

$text = $_GET["paragraph"];
var_dump($text);

$censor = $_GET["badword"];
var_dump($censor);

$word = str_replace($censor,"***", $text);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p><?php echo $text ?></p>
        <p><?php echo $word ?></p>
    </div>


</body>
</html>