<?php
    function show(){
        echo "<p>Funkcja w php</P>";
    }

    function showMessage($msg){
        echo"<p>$msg</P>";
    }

    function sum($a, $b){
        return $a + $b;
    }

    function generatelist($array){
        echo"<ul>";
            foreach ($array as $fruits){
                echo"<li>$fruits</li>";
            }
        echo"</ul>";
    }

    function sortArray($array, $order){
        echo"<ul>";
        if($order == "asc"){
            sort($array);
            foreach($array as $item){
                echo "<li>" .$item. "</li>";
            }

        } else if ($order == "desc"){
            rsort($array);
            foreach($array as $item){
                echo "<li>" .$item. "</li>";
            }

        }
        echo"</ul>";
    }
?>