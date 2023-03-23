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


        function strpal($word){
            $prvoSlovo= 0;
            $zadnjeSlovo = strlen($word) - 1;
            $provjera = true;

            
            //prolazimo kroz riječ slovo po slovo od naprijed i odozada i ako nije isto u bilo kojem trenutku vraća nazad false 
            while($zadnjeSlovo > $prvoSlovo){
                if($word[$zadnjeSlovo] != $word[$prvoSlovo]){
                    $provjera = false;
                    break;
                }
                $prvoSlovo++;
                $zadnjeSlovo--;
            }
         
            //kada prođe kroz cijelu riječ ako je provjera i dalje istina onda vraća da je riječ palindrom
            if($provjera == true){
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