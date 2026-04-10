<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // INCLUDE -> dołąćżenie
        //require -> wymagane

        include "data.php";
        require "data.php";
        include_once "data.php";
        require_once "data.php";

        require "function.php";
        require_once "function.php";
        show();
        showMessage("to weidamosc do uzytkownika");

        $x = 10;
        $y = 20;
        echo "<p>Suma $x i $y = ".sum($x, $y)."</p>";

        echo "<h4>lisa owocow(orginal)</h4>";
        generatelist($fruits);

        sortArray($vagetable, "asc");

        
        echo "kod";

    
    ?>
</body>
</html>