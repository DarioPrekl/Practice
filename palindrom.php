<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <?php

    //funkcija koja obrne riječ i ako je jednaka originalnoj riječi onda je riječ palindrom, a ako nije jednaka vrati da nije palindrom
    function strpal($word){
        if (strrev($word) == $word){
            echo $word . " je palindrom <br/>";
        }
        else{
            echo $word . " nije palindrom <br/>";
        }

    }

    strpal("racecar");
    strpal("radar");
    strpal("antonio");

    ?>

</body>
</html>
