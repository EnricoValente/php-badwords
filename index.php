

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        

        

        <form action="result.php" method="GET">
            <div>
                <input type="text" name="badword" value="<?php echo $keyWord;?>">
            </div>
            <div>
                <textarea rows="4" name="comment" value="<?php echo $text;?>"></textarea>
            </div> 
     
            <div>
                <button type="submit">
                    Invia
                </button>
            </div>
        </form>
                
                 
            
    </body>
</html>

