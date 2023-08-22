
<?php
    $keyWord = $_GET['badword'];
    $text = $_GET['comment'];

    $censored = str_replace($keyWord, '***', $text);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <p>
        
            <?php echo $text; echo strlen($text);?> 
        </p>

        <p>
            <?php echo $censored; echo strlen($censored);?>  
        </p>

    </body>
</html>