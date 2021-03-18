<?php
    //1
    for($i = 0; $i<5; $i++) { //แถว
        for($j = 0; $j<5; $j++) {  //คอลัมน์
            if ($i >= $j) {
                echo "O" ;
            } else {
                echo " ";
            }      
        }
        echo "<br>";
    }
    echo "<br><br>";
    //2
    for ($i = 0; $i < $size = 5; $i++) {
        for ($j = 0; $j < $size * 2; $j++) {
            if ($i >= $size - $j && $size - $i <= 2* $size - $j) {
                echo "O" ;
            } else {
                echo "&nbsp&nbsp&nbsp";
            } 
        }
        echo "<br>";
    }

    $marks = array(
        "mohammad"=>array(
            "physics"=>35,
            "maths"=>30,
            "chemistry"=>29
        )
    )
?>