<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        
        require 'C:\Users\sande\OneDrive - ROCvA, ROCvF en VOvA\jaar1\php-basic-c0\7-Working with files\taak03 - html & php\includes\database.php';

        $leeftijd = 15

    ?>
</head>
<body>
    <div class="menu">
        <?php 
            include 'C:\Users\sande\OneDrive - ROCvA, ROCvF en VOvA\jaar1\php-basic-c0\7-Working with files\taak03 - html & php\includes\menu.php';
        ?>
    </div>
    <div id="isMeerderJarig">
        <?php 
            if($leeftijd < 16){
                echo "<h3>Je bent te jong om deze pagina te bekijken</h3>";
            }
            if($leeftijd >= 16){
                echo "<h3>Je mag deze pagina bekijken</h3>";
            }
        ?>
    </div>
</body>
</html>