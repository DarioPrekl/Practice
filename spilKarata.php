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



        function brojacSpilova($brojKarata){
  
            $razliciteKarte = range(1,32);
            $spilSvihKarti = array() ;
            $puniSpil = array();
            $provjeraCijelogSpila = false;
            $brojacRazlicitihKarti = array();
              
            //kreiranje špila sa svim kartama koje nisu raspoređene
            for($k = 1 ; $k <= $brojKarata ; $k++){
                $karta = $razliciteKarte[array_rand($razliciteKarte)];
                array_push( $spilSvihKarti , $karta);
            }

            //stavljanje 32 različitih karata u jedan špil
            Foreach ($spilSvihKarti as $karta) {
                if (!in_array($karta, $puniSpil)) {
                    $puniSpil[] = $karta;
                }
            }

            //provjera jel moguce sastaviti jedan cijel špil i ako nije da vrati da nije moguče sastaviti cijeli špil.
            if (count($puniSpil) == 32) {
                $provjeraCijelogSpila = true;
            }
            else{
                echo "Broj cijelih špilova je 0.";
            }

            /*
            ako je moguče sastaviti cijeli špil onda prebroj sve različite karte koje su pomiješanom špilu 
            i koje karte ima najmanje toliko je mogučih različitih špilova napraviti
            */
            if ($provjeraCijelogSpila == true){
                $count = array_count_values($spilSvihKarti);
                for ($x = 1; $x <= 32; $x++) {
                     array_push($brojacRazlicitihKarti, $count[$x]);
                } 
                echo 'Broj cijelih Špilova je: ' . min($brojacRazlicitihKarti) . '<Br/>';
            }
        }    

    ?>

</body>
</html>