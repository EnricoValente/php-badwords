
<?php
    $keyWord = $_GET['badword'];
    $text = $_GET['comment'];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>

                    
                    
            <?php echo $keyWord;?>
            
        </h1>

        <p>
        
            <?php echo $text;?> 
        </p>
    </body>
</html>