<?php 
$paragraph = $_GET["paragraph"];
$word = $_GET["word"];
$newWord = str_replace($word, "***", $word)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Il paragrafo <?php echo $paragraph?> è lungo <?php echo strlen($paragraph)?> </p>
    <div> <?php echo $newWord ?> </div>
</body>
</html>