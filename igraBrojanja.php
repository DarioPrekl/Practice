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
    	$igraci = 0;
        $isIncrement = true;

        //u ovoj funkciji igrači se kreću u smjeru od 1. do zadnjeg igrača i kad dođe do zadnjeg kreće ispočetka
        function increment(){
            global $igraci;
            $igraci++;
            if($igraci == 11){
                $igraci = 1;
            }
        }
        
        //u ovoj funkciji je sve isto samo smo obrnuli smjer brojanja
        function decrement(){
            global $igraci;
            $igraci--;
            if($igraci == 0){
                $igraci = 10;
            }
        }

        //napravili smo da igrači broje od 1 do 100
        for( $brojalica = 1 ; $brojalica <= 100 ; $brojalica++){

            //s ovom if naredbom preskačemo svaki broj djeljiv s 13
            if($brojalica % 13 == 0){
                continue;
            }

            //s ovom if naredbom mijenjamo smjer brojanja igrača
            if($brojalica % 7 == 0){
                if($isIncrement){
                    increment();
                }
    
                else{
                    decrement();       
                }
                $isIncrement = !$isIncrement;
                echo $igraci . ' kaže: ' . $brojalica . '<br/>';
                continue;
            }

            if($isIncrement){
                increment();
            }

            else{
                decrement();       
            }

            echo $igraci . ' kaže: ' . $brojalica . '<br/>';
        }

        
    ?>
</body>
</html>