<?php

 $txt = "Jhosua ";

 if(empty($txt)){
    echo "variabel nama tidak ada nilainya.<BR>";
 } else{
    echo "Variabel Nama ada Nialainya..<BR>";
 }

 for($i=0; $i<5; $i++){
    echo "Hallo nama saya ".$txt."...".$i."<BR>";
    }

    $mahasiswa = ["jhosua","farrel","daniel","manu","aldo"];

    function cetaknama($txt){
        echo $txt." Di cetak <BR>";
    }

    for($a=0; $a<count($mahasiswa); $a++){
        cetaknama($mahasiswa[$a]);
    }
    

?>
