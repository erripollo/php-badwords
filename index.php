<?php 

    $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium facilis accusantium amet odit minima quos? Molestiae consectetur vel quisquam quis quasi ad, quae commodi magnam, ipsa aut, possimus nisi aspernatur.";

    $bad_word = $_GET["bad_word"];
    
    $text_censored = str_replace(strtolower($bad_word), "***", strtolower($text));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Badwords</title>
</head>
<body>
    
    <p> <?php echo $text_censored; ?> </p>
    <p>Lunghezza paragrafo: <?php echo strlen($text_censored) ?></p>
</body>
</html>