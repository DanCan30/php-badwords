<?php 

    $text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, amet! Doloremque dolores tenetur illum sint praesentium modi quasi molestiae ullam. Sint, esse pariatur vero cupiditate nihil est provident eaque rerum?";
    $badWord = $_GET["filter"];
    $censoredText = str_ireplace($badWord, "***", $text);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BADWORDS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>PHP Badwords</h1>

    <main class="container">
        <p>
            <?php
                echo $text;
            ?>
            <div>
                Length: 
                <span>

                    <?php
                        echo strlen($text);
                    ?>
                </span>
            </div>
        </p>
        
        <p>
            <?php
                echo $censoredText;
            ?>
            
            <div>
                Length: 
                <span>

                    <?php
                        echo strlen($censoredText);
                    ?>
                </span>
            </div>
        </p>
    </main>
    

</body>
</html>