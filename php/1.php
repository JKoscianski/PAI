<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $firstName = "Janusz";
        $lastName = "Ptak";
        echo "Imie: $firstName<br>";
        echo 'Nazwisko: $lastName<br>';

        // heredoc
        echo <<< DATA
        Imie: $firstName<br>
        Nazwisko: $lastName
        <hr>

DATA;  

        // nowdoc
        echo <<< 'DATA'
        Imie: $firstName<br>
        Nazwisko: $lastName
        <hr>

DATA;

    echo phpinfo();



    ?>
</body>
</html>