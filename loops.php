<?php
    // ======= for loop =======


    // for ($i = 1 ; $i <= 10; $i ++ ){
    //     echo $i;
    //     echo "<br/>";
    // }

    // for($i = 10 ; $i >= 1; $i--){
    //     echo $i."<br/>";
    // }
    
    for($i = 1; $i <= 10; $i++){
        if( $i == 5){
            continue;
        }
        if($i == 8){
            break;
        }
        echo $i."<br/>";
    }
?>