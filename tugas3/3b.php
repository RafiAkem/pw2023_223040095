<?php 
function urutanAngka ($angka) {
    $count = 1;

    for($i=0; $i < $angka; $i++) {
        for($j=0; $j <= $i; $j++) {
            echo "$count ";

            $count++;
         }   
         echo "<br>";
    }
}
echo urutanAngka(5);


?>